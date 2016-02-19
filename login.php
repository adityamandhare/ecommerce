<html>
<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
User Login
</title>
</head>

<body>

<center>
<table width="60%" height=80  bgcolor="#38ACEC">
<tr>
<td>
<font color="#FFFFFF" face="Elephant" size="10">
&nbsp;&nbsp;&nbsp;&nbsp; 
Just Click</font>&nbsp; <font color="#FFFFFF" face="Elephant" size="4"><sub>.com</sub>
</font>

<p align="right">
<font color="#000000" face="Times New Roman" size="3">
<?php 
session_start();
error_reporting(E_PARSE);
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
<br><br><br><br>
<center>
<table width="60%" border=0>
<tr>
<td width="60%">
<center>
<img src="images/index.jpg"></img>
</center>
</td>
<td>
<?php

 error_reporting(E_PARSE);
if(isset($_POST['login']))
{
	
	
	$user=stripslashes(trim($_POST['username']));
	$pass=stripslashes(trim($_POST['password']));
	
	$con=mysql_connect("localhost","root","");
    if(! $con)
    die("couldn't connect to database");
    mysql_select_db("shop",$con) or die ("cannot select db");	

 
$select_record="select * from customer where mail='".$user."' and password='".$pass."' " ;

$select_query=mysql_query($select_record) or die(mysql_error());

if($_POST['username']!='' && $_POST['password']!='')
{
if(mysql_num_rows($select_query)==0 )
{
	echo("<font color=\"#800000\"><b>Incorrect user id or password.</b></font>");	
}
else
{
	if($_SESSION[purchase]==1)
	{
	$_SESSION["user"]=1;
    $_SESSION["logged"]=$user;
	$_SESSION["member"]=1;
    header('Location:purchase3.php');
	}
	else 
	{
	$_SESSION["user"]=1;
    $_SESSION["logged"]=$user;
	header('Location:home.php');
	}
} 
    
}   
    
    
    
    
    
}  
    
?>
<br><br>
<form id="f1" action="login.php" method="POST">
<b>
Username/Email-id:<input type="text" name="username">
<br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Password:<input type="password" name="password">
<br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
<input type="submit" name="login" value="login">
</b>
</form>
</td>
</tr>
</table>
</center>

</body>
</html>