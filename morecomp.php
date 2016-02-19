<?php 
session_start();
$_SESSION["moreprod"]=1;
$_SESSION["searchbar"]=0;
header('Location:more_products.php');
?>