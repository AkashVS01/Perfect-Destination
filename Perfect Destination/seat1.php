<?php
session_start();
error_reporting(0);

function current_url()
{
  $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $validURL= str_replace("&","&amp", $url);
  return $validURL;
}

//echo "url is :".current_url().'<br>';
$link=current_url();
$parsed=parse_url($link,PHP_URL_QUERY);
parse_str($parsed,$place);
//print_r($place);
$_SESSION['fare']=$place['fare'];
$_SESSION['busid']=$place['ampbus_id'];
//echo $_SESSION['busid'];
//echo $_SESSION['fare'];
header('location:seat.php')

?>