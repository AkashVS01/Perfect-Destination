<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket Cancellation</title>
	<link rel="stylesheet" type="text/css" href="cancel1.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
     <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--<script>
        
   function insert() 
    {
    if (window.XMLHttpRequest) 
    {
        xmlhttp = new XMLHttpRequest();
    } 
    else 
    {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
        
    xmlhttp.onreadystatechange = function() 
    {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById('message').innerHTML = xmlhttp.responseText;
            }
    }

    //parameters1 = 'seatno='+document.getElementById('seatno').value + 'phoneno='+document.getElementById('phoneno').value;
    //parameters2 = 'phoneno='+document.getElementById('phoneno').value;
        
    xmlhttp.open('POST', 'cancelcheck.php', true);
    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xmlhttp.send('tid=ticketid&bid=busid');
    
    }

</script>-->
<style type="text/css">
    @media only screen and (max-width: 768px) {
            body{
                background-image: url('img/resimg7.jpg');
                background-color: #69d6f5;
                background-size:100% 100%;
                height: 800px;
                width: auto;
            }

            h2{
                text-align:center;
                font-size:8vw;
                color: black;

            }
            p{
    color:#000000;
    font-family: 'Aldrich';
    font-size: 4vw;
}
input[type=number]
{
    background-color: rgba(0,0,0,0.6);
    height: 50px;
    width: 70%;
    color: #ffffff;
    border: none;
    font-size: 16px;
    font-weight: 400;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 40px;
    padding: 0px 25px;
    left: 10%;
}
.submit-btn{
    text-align: center;
    position: absolute;
    left: 20%;
    width: 60%;
    background-color:#000000;
    color: rgba(0,255,255,1);
}
.error {
  width: 45%; 
  font-family: 'Helvetica';
  font-size: 16px;
  margin: 5px; 
  padding-left: 3px;
  position: absolute;
  border: 1px solid rgba(255,0,0,0.3); 
  color: #ff0000; 
  background:#eb9494; 
  border-radius: 5px; 
  text-align: left;
  float: left;
}
        }
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
<br>
<br>
<br>
<h2 style="color: #b200c2;"><u>Ticket Cancellation</u></h2>
    <form method="post" action="cancelcheck2.php">
    

    <br>
    <p style="color: #b200c2;"><b>Enter the Ticket Id</b></p><br>
    <input type="number" id="ticketid" placeholder="Ticket No.." name="tid" required>
    <p style="color:#b200c2;"><b>Enter the Bus ID</b></p><br>
    <input type="number" id="busid" placeholder="Bus ID.." name="bid" required>
     <br>
    <br>
  
    <br>
    <br>
    <br>
    <input type="submit" class="submit-btn" value="Cancel Ticket" name="submit">
   

</form>

</div>

</div>

</body>
</html>