<!DOCTYPE html>
<html>
<head>
	<title>Cancellation error :(</title>
  <link rel="stylesheet" type="text/css" href="passenger.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    
    <style type="text/css">
        
     

    </style>
</head>
<body>


<!--Navbar-->
<nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="#" class="logo">Perfect Destination</a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="home.php" class="nav-links">HOME</a>
            </li>
            <li>
                <a href="#" class="nav-links">ABOUT US</a>
            </li>
            <li>
                <a href="cancel.php" class="nav-links">CANCEL TICKET</a>
            </li>
            
        </ul>
</nav>


<?php  
if (count($errors) > 0) : ?>
  <div class="error">
  	
  </div>
<?php  endif ?>