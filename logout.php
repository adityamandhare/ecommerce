<?php 
session_start();
$_SESSION["user"]=0;
session_destroy();
header('Location:home.php');
?>