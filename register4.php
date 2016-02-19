<?php 
session_start();
error_reporting(E_PARSE);
if($_SESSION[complete_step3]==1)
{
$_SESSION["complete_step1"]=0;	
$_SESSION["complete_step2"]=0;	
?>

<?php 
if(isset($_POST["shop"]))
{   $_SESSION["complete_step3"]=0;
	header('Location:home.php');
}
?>
<html>
<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
Confirm registration
</title>
</head>
<body>
<center>
<table width="80%" height=80  bgcolor="#38ACEC">
<tr>
<td>
<font color="#FFFFFF" face="Elephant" size="10">
&nbsp;&nbsp;&nbsp;&nbsp; 
Just Click</font>&nbsp; <font color="#FFFFFF" face="Elephant" size="4"><sub>.com</sub>
</font>

<p align="right">
<font color="#000000" face="Times New Roman" size="3">


<?php 


if($_SESSION[user]==1)
echo("<a href=\"home.php\" style=\"color:#FFFFFF\">Home</a> | <a href=\"logout.php\" style=\"color:#FFFFFF\">Logout</a> | <a href=\"wallet.php\" style=\"color:#FFFFFF\">Wallet</a> | <a href=\"contactus.php\" style=\"color:#FFFFFF\">Contact Us</a>");
else 
echo("<a href=\"home.php\" style=\"color:#FFFFFF\">Home</a> | <a href=\"login.php\" style=\"color:#FFFFFF\">Login</a> | <a href=\"wallet.php\" style=\"color:#FFFFFF\">Wallet</a> | <a href=\"contactus.php\" style=\"color:#FFFFFF\">Contact Us</a>");
?>

</font>
</p>
</td>
</tr>
</table>
</center>
<center>
<h1>Your Registration has been confirmed.</h1>
<br><br>
<i>
Enjoy your shopping experience with JUST CLICK.com
</i>
<br><br><br><br>
<form method="POST" action="register4.php">

<input type="submit" name="shop" value="Start Shopping">
</form>

</center>
</body>
</html>
<?php 
}
?>