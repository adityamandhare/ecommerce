<?php 
session_start();
$_SESSION["moreprod"]=5;
$_SESSION["searchbar"]=0;
header('Location:more_products.php');
?>