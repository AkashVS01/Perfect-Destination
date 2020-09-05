<?php 
session_start();
error_reporting(0);
$_SESSION['dateid'];

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Bus list</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
 

	<!-- Custom stlylesheet   
	<link type="text/css" rel="stylesheet" href="home.css">  -->
    

    <style type="text/css">

   html, body 
   {
    max-width: 100%;
    overflow-x: hidden;


   }


    body
   {
    background-image: url('img/bus3.jpg');
    background-repeat: no-repeat;
    background-size: cover;

   }

@media only screen and (max-width: 2020px)
{
  body
  {
    max-width: 100%;
    overflow-x: hidden;
    height: 1200px;
  }
}

@media only screen and (max-width: 1130px)
{
    body
   {
        max-width: 100%;
         height: 1330px;
   } 
}

@media only screen and (max-width: 900px)
{
    body
    {
      max-width: 100%;
      overflow-x: hidden;
    }



    input[type=submit]
    {
     color: #fff;
     float:right;
     background-color: #4fa3e3;
     font-weight: 400;
     height: auto;
     font-size: 94%;
     border: none;
     width: 9%;
     border-radius: 4px;
     text-transform: uppercase;
     }

    }


 
   





@media only screen and (max-width:770px)
{
    body
    {
        background-image:url('img/eve.jpg');
        background-size: cover;
        background-repeat: no-repeat;
      

        max-width:100%;
        height: 1030px;
    }
}


@media only screen and (max-width: 400px) 
{
  body
  {
    max-width: 100%;
    height: 812px;
  }

   .travelinfo 
        {
           background-color: #fae8fc;
           opacity: 1;
          
          border: 1px groove black
          width: 100%;
          height: 23%;
          margin-bottom: 3px;
          margin-top:3px;
          font-family: 'arial';
          
              
        }    



         .rows
        {  
          margin: auto;
          margin-top:3px;
          width: 85%;
          font-size: 0.8em;
          border:1px solid #d5dbda;
          border-radius: 10px;
          height: 200px;
          padding: 1px;
          
         

        }

  /*  .rows span
    {
      font-size: 100em;
    }
*/

  input[type=submit]
    {
     color: #fff;
     float:right;
     background-color: #4fa3e3;
     
     height: auto;
     font-size:0.1em;
     border: none;
     width: 9%;
     border-radius: 1%;
     text-transform: uppercase;
     }



}




 * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;

   }


/*navbar*/
.navbar {
            font-size: 18px;
            background-image: linear-gradient(260deg, #2376ae 0%, #c16ecf 100%);
            border: 1px solid rgba(0, 0, 0, 0.2);
            padding-bottom: 10px;
            font-family: arial;
            /*margin-bottom: 20px; */
        }

        .main-nav {
            list-style-type: none;
            display: none;
        }

        .nav-links,
        .logo {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.7);
        }

        .main-nav li {
            text-align: center;
            margin: 15px auto;
        }

        .logo {
            display: inline-block;
            font-size: 22px;
            margin-top: 10px;
            margin-left: 20px;
        }

        .navbar-toggle {
            position: absolute;
            top: 10px;
            right: 20px;
            cursor: pointer;
            color: rgba(255, 255, 255, 0.8);
            font-size: 24px;
        }

        .active {
            display: block;
            z-index: 100;
        }

        @media screen and (min-width: 768px) {
            .navbar {
                display: flex;
                justify-content: space-between;
                padding-bottom: 0;
                height: 70px;
                align-items: center;
            }

            .main-nav {
                display: flex;
                margin-right: 30px;
                flex-direction: row;
                justify-content: flex-end;
            }

            .main-nav li {
                margin: 0;
            }

            .nav-links {
                margin-left: 40px;
            }

            .logo {
                margin-top: 0;
            }

            .navbar-toggle {
                display: none;
            }

            .logo:hover,
            .nav-links:hover {
                color: rgba(255, 255, 255, 1);
            }
        }


 /* style for bus list */
        
        .travelinfo 
        {
           background-color: #fae8fc;
           opacity: 1;
          box-sizing: border-box;
          border: 2px groove black
          width: 100%;
          height: 100px;
          margin-bottom: 10px;
          margin-top:8px;
          font-family: 'arial';
          
              
        }    
   



         .rows:hover
         {
            background: #ddede2;
            width:86%;
            opacity: 1;
            
         }

        .rows
        {  
          margin: auto;
          margin-top:9px;
          width: 85%;
          border:1px solid #d5dbda;
          border-radius: 20px;
          height: 200px;
          padding: 10px;
          background-color: #edfeff;
          opacity: 0.9;
          box-sizing: border-box;
          box-shadow: 2px 2px 1px #888888;
          transition: width 0.5s ease-out;
         

        }
        
    input[type="submit"]
     {
    color: #fff;
    float:right;
    background-color: #4fa3e3;
    font-weight: 400;
    height: 38px;
    font-size: 94%;
    border: none;
    width: 9%;
    border-radius: 4px;
    text-transform: uppercase;
    
    }

    input[type="submit"]:hover
    {
        background-color: #00de3b;
        cursor: pointer;
    }
       






    </style>
	

</head>                          
                                          
<!--Navbar-->
<body>
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

<?php
 
 error_reporting(0);

$src_name = $_SESSION['source'];
$des_name = $_SESSION['dest'];
$date = $_SESSION['dateid']; 



$conn=mysqli_connect('localhost','root','','Db');
if(!$conn)
 {
    echo "Connection Failed!".mysqli_connect_error($conn);
 }

//check whether entered date is valid or not

date_default_timezone_set("Asia/Kolkata");
$d = date('Y-m-d');

//query is executed only if the data is valid

if ($date >= $d)
{
$s="SELECT s_id from station where sname='$src_name';";
$d="SELECT s_id from station where sname='$des_name';";
$res1 = mysqli_query($conn,$s);
$src = mysqli_fetch_assoc($res1);
$res2 = mysqli_query($conn,$d);
$des = mysqli_fetch_assoc($res2);
$src = $src['s_id'];
$des = $des['s_id'];

$query = "select * from bus where b_id in (select b_id from travels_through where src_id='$src' and des_id='$des');";
$result = mysqli_query($conn,$query);
$businfo = mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($businfo);
$query1 ="select count(*) as count from bus where b_id in (select b_id from travels_through where src_id='$src' and des_id='$des');";
$result1 = mysqli_query($conn,$query1);
$countinfo = mysqli_fetch_array($result1);
$count= $countinfo[0];



//checking count of buses

if ($count==1)
{
    $val="Bus";
}
elseif($count==0){
    $val="buses";
    $count="Sorry :( No";
}
else
{
    $val="buses";
}
?>

<div class="travelinfo">
     <?php echo 
     '<p style="padding:0.5%;text-align: center;font-size: 1.3em;"><b><span style="color:#f03c4e;font-size:1.3em;">'. $count. ' '.$val.' </b></span> available from <br><br><b><span style="font-size:1.001em;padding-top:1%;">'.
         $src_name.' to '.$des_name; '</span></b></p>' ?> 



</div>
    <?php foreach ($businfo as $b) { ?>
        
    <div class="rows">
        <?php echo  
        '<p style="padding:0.6%;text-align:center;"><span style="padding-left:30%;color:#fa001d;font-size:1.3em;"><small>INR </small><b>'.$b['fare'].'</b></span><br></p><span style="text-align:left;font-size:1.5em;font-style:bold;padding-right:900px;">'.
        $b['bname']. '</span><br>
        <span style="color:#00a38d;font-size:0.9em;">['.$b['btype'].']</span><br>  <span style="text-align:center;font-size:1.2em;padding-left:62%;font-family:Alata;color:#02db97;"><b>'.$b['seats'].' Seats </b></span>
        <form action="seat.php?fare='.$b['fare'].'&busname='.$b['bname'].'&time='.$b['time'].'&busid='.$b['b_id'].'" method = "post">
        <br><span style="font-size:1.3em;color:#34b800;">Time : '.$b['time'].'</span>
        <input type="submit"  value="Book Seats" name="booksub">
        </form>

        </p></div>'; ?>
        
           
       </div>

<?php } }

else
{

  echo '<p class="travelinfo" style="padding:2%;color:#f03c4e;font-size:1.3em;font-size:1.5em;text-align:center;"><b>**Please enter a valid date**</b></p>';
}

?>



</div>


</body>
</html>
