<?php 
session_start();
$_SESSION["moreprod"]=2;
$_SESSION["searchbar"]=0;
header('Location:more_products.php');
?>