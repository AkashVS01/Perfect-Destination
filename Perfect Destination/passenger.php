<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Passenger Details</title>
	

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    

    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="pass.css">
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
                <a href="about.php" class="nav-links">ABOUT US</a>
            </li>
            <li>
                <a href="cancel.php" class="nav-links">CANCEL TICKET</a>
            </li>
            
        </ul>
</nav>

<script type="text/javascript">
let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () 
{
  mainNav.classList.toggle('active');
});
</script>


<div class="rect">
    
<div class="b1">
   <h2>Passenger information:</h2>
   <br>
<form action="psgreg.php" method="POST">
   <p>Name:</p>
   <input type="text" name="name" placeholder="Name" required>
   <p>Age:</p>
   <input type="number" name="age" placeholder="age" required><br>
   
   <label>Gender:</label>
      <div class="col-sm-8 gen" style="margin-top: 6px">
            <input type="radio" id="femaleRadio" name="gender" value="Male" >
            <label>Male</label>
            <input type="radio" id="maleRadio" name="gender" value="Female" style="margin-left: 10px">
            <label>Female</label>
      </div>
    <hr class="hr">
    <br>
    <div class="b2">
      <h2>Contact Details:</p></h2><br>
      <p>E-mail:</p>
      <input type="email" name="gmail" placeholder="Email" required>
      <p>Phone no:</p>
      <input type="text" name="phno" placeholder="Phone no" required>
    </div>

    <div class="flexbox">
        <p>Seat no:<span style="color:blue;"><?php 

             echo $_SESSION['seatno'];


          ?></span></p>
        <p class="g1">Bus Name:<span style="color:blue"><?php echo $_SESSION['busname']; ?></span></p><?php   ?>
    </div>

    <div class="flexbox">
       <p class="g2">Amount:<span style="color:blue;">INR.<?php echo $_SESSION['fare'] ?></span></p>
       <p  class="g3">Date:<span style="color:blue"><?php echo $_SESSION['dateid']; ?></span></p>
    </div>

    <input type="submit" class="submit-btn" value="Confirm Payment">

</form>
                                        
                        
</div>








</div>






</body>
</html>
