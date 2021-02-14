<?php

if(isset($_POST['submit'])){

  $fieldnames = ['username', 'password'];

  $error = false;

  foreach($fieldnames as $field){
      if(!isset($_POST[$field]) || empty($_POST[$field])){
          $error = true;
      }
  }

  if(!$error){
      $username = $_POST['username'];
      $password = $_POST['password'];

      $db = new database();
      $db->login($username, $password);
  }

}

?>

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

.loginform {
    width: 350px;
    height: 250px;
    text-align: center;
    background-color: green;
    margin-top: 15%;
    margin-left: 40%;
    margin-right: 45%;
    
    margin-bottom: auto;
    border-style: solid;
    
}

.loginform label {
    color: white;
    font-family: cursive;
}

.loginform h2 {
    color: white;
    font-family: cursive;
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
        <div class="loginform">
            <form action="#" method="post">
                <h2>Login Werknemer</h2>
                <label for="username">Username</label><br>
                <input type="text" name="username" required><br><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" required><br><br>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>