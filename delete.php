<?php 
session_start();
error_reporting(E_PARSE);


$delp=trim($_GET['pid']);
$d=" ".$delp." ";
$_SESSION[kart]=str_replace($d,"",$_SESSION[kart]);
	    $_SESSION["count"]=$_SESSION[count]-1;
	    $_SESSION["bill"]=$_SESSION[bill]-$_GET['cost'];
header('Location:cart.php');
	    

?>