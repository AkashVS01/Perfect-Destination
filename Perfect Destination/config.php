<?php


$host ="localhost";
$username="root";
$password="";
$database="Db";

$conn =  mysqli_connect($host ,$username ,$password ,$database);

if(!$conn)
{
	die("Connection Failed");
}





?>
