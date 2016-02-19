<?php 
session_start();
error_reporting(E_PARSE);

$newproduct=$_GET['pid'];

    $_SESSION["count"]=$_SESSION[count]+1;
    
    $_SESSION["bill"]=$_SESSION[bill]+$_GET['cost'];
        
    $_SESSION["kart"]=$_SESSION[kart]." ".$newproduct;
header('Location:cart.php');

?>