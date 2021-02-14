<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Power</title>
    <style>

/* The sidebar menu */
.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 205px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

.uppernav {
    height: 100px;
    width: 100%;
    position: fixed;
    z-index: 0;
    top: 0;
    right: 0;
    background-color: greenyellow;
    border-style: solid;
    border-color: Black;
}

.uppernav h1 {
    padding-left: 50%;
    font-family: cursive;
    font-weight: bold;
}

/* Style page content */
.main {
  margin-left: 205px; /* Same as the width of the sidebar */
  margin-top: 100px;
  padding: 10px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

    </style>
</head>
<body>
    <div class="sidenav">
        <a href="index.php"><img src="logo.png" width="165" height="165"></a>
        <a href="loginEmployee.php">Inloggen Medewerkers</a>
        <a href="contact.php">Contactpagina</a>
        <a href="loginCustomer.php">Inloggen Klanten</a>
        <a href="register.php">Registreren</a>
    </div>
    <div class="uppernav">
        <h1>Flower Power</h1>
    </div>
    <div class="main">
        <h2>Flower Power Text for page contents</h2>
        <a href="#"><img src="bloemen_bouquet.jpg" width="400" height="400"></a>
        <a href="#"><img src="flower_power_winkel.jpg" width="30%" height="30%"></a>
    </div>
</body>
</html>
