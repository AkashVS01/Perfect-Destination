<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket Cancellation</title>
	  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'> <script src="http://code.jquery.com/jquery-3.4.1.js"></script> <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" type="text/css" href="cancel1.css">
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
	p{
    color:black;
    background:rgba(194, 102, 255,0.5);
     padding:2% 2%;
     font-size:3vw;
     font-style:bold;
     text-align:center;
     width: 80%;
     margin-left: 5%;
     border-radius: 10px 10px 10px 10px;
}
.submit-btn{
    text-align: center;
    position: absolute;
    left: 33%;
    width: 30%;
    background-color:#000000;
}
a{

    color:#be6fcf;
}

            
     @media only screen and (max-width: 768px) {
    body{
                background-color: #69d6f5;
                background-image: url('img/resimg7.jpg');
                background-size:cover;
                height: 800px;
                width: 100%;
            }
    p{
    color:black;
    background:rgba(0,0,0,0.3);
     padding:5% 5%;
     font-size:6vw;
     font-style:bold;
     text-align:center;
     width: 80%;
     margin-left: 5%;
     border-radius: 10% 10% 10% 10%;
}
h1 {
    color: #ffffff;
    font-family: 'Helvetica';
    padding-top: 15px;
    text-align: center;
    width: 89%;
    height: auto;
    background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(237,156,4,0.5) 0%, rgba(36,27,27,0.5) 79%);
    border-radius: 10px 10px 10px 10px;
    margin-left: 5%;
}
.submit-btn{
    text-align: center;
    position: absolute;
    margin-top:  25%;
    left: 20%;
    width: 60%;
    background-color:#000000;
}
a{

    color: rgba(0,255,255,1);
}
     }
     


</style>
</head>


<body>

<!--Navbar-->
   <nav class="navbar" >
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
<p><b><?php echo $_SESSION['output']; ?></b></p>
<br>
<br>
<br>
<button type="button" placeholder="Back To Cancellation page"class="submit-btn" style="background-color: rgba(0, 0, 0,1);"><a href="cancel.php" style="text-decoration: none;font-family: 'Calibri'">Back To Cancellation page</a></button>

</div>

</div>

</body>
</html>