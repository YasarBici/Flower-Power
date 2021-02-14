CREATE DATABASE FlowerPower;

--Gebruik dit als het FlowerPower niet als default kiest OF als je deze sql file importeert
--USE FlowerPower;

CREATE TABLE Klant (
	Klantcode INT AUTO_INCREMENT,
    Voorletters VARCHAR(255),
    Tussenvoegsels VARCHAR(255),
    Achternaam VARCHAR(255),
    Adres VARCHAR(255),
    Postcode VARCHAR(255),
    Woonplaats VARCHAR(255),
    Geboortedatum DATE,
    Gebruikersnaam VARCHAR(255),
    Wachtwoord VARCHAR(255),
    
    PRIMARY KEY (Klantcode)
)

CREATE TABLE Medewerker (
	Medewerkerscode INT AUTO_INCREMENT,
    Voorletters VARCHAR(255),
    Voorvoegsels VARCHAR(255),
    Achternaam VARCHAR(255),
    Gebruikersnaam VARCHAR(255),
    Wachtwoord VARCHAR(255),
    
    PRIMARY KEY (Medewerkerscode)
)

CREATE TABLE Winkel (
	Winkelcode INT AUTO_INCREMENT,
    Winkelnaam VARCHAR(255),
    Winkeladres VARCHAR(255),
    Winkelpostcode VARCHAR(255),
    Vestigingsplaats VARCHAR(255),
    Telefoonnummer VARCHAR(255),
    
    PRIMARY KEY (Winkelcode)
)

CREATE TABLE Artikel (
	Artikelcode INT AUTO_INCREMENT NOT NULL,
    Artikel VARCHAR(255) NOT NULL,
    Prijs DECIMAL(6,2) NOT NULL,
    
    PRIMARY KEY (Artikelcode)
)

CREATE TABLE Factuur (
	Factuurnummer INT AUTO_INCREMENT NOT NULL,
    Factuurdatum datetime NOT NULL,
    Klantcode INT,
    
    PRIMARY KEY (Factuurnummer),
    FOREIGN KEY (Klantcode) REFERENCES Klant(Klantcode)
)

CREATE TABLE Factuurregel (
	Factuurnummer INT NOT NULL,
    Artikelcode INT NOT NULL,
    Aantal VARCHAR(255),
    Prijs DECIMAL(6,2),
    
    FOREIGN KEY (Factuurnummer) REFERENCES Factuur(Factuurnummer),
    FOREIGN KEY (Artikelcode) REFERENCES Artikel(Artikelcode)
)

CREATE TABLE Bestelling (
    Artikelcode INT NOT NULL,
    Winkelcode INT NOT NULL,
    Aantal VARCHAR(255),
    Klantcode INT NOT NULL,
    Medewerkerscode INT NOT NULL,
    Afgehaald VARCHAR(255),
    
    FOREIGN KEY (Artikelcode) REFERENCES Artikel(Artikelcode),
    FOREIGN KEY (Winkelcode) REFERENCES Winkel(Winkelcode),
    FOREIGN KEY (Klantcode) REFERENCES Klant(Klantcode),
    FOREIGN KEY (Medewerkerscode) REFERENCES Medewerker(Medewerkerscode)
)