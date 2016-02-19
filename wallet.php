<html>
<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
User Wallet
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
echo("<a href=\"home.php\">Home</a> | <a href=\"logout.php\">Logout</a> | <a href=\"wallet.php\">Wallet</a> | <a href=\"register1.php\">Register</a> | <a href=\"contactus.php\">Contact Us</a>");  
else
echo("<a href=\"home.php\">Home</a> | <a href=\"login.php\">Login</a> | <a href=\"wallet.php\">Wallet</a> | <a href=\"register1.php\">Register</a> | <a href=\"contactus.php\">Contact Us</a>");  
?>
</font>
</p>
</td>
</tr>
</table>
</center>
<br>
<br><br><br><br>
<center>
<table width="60%" border=0>
<tr>
<td width="60%">
<center>
<img src="images/wealth.jpg"></img>
</center>
</td>
<td>
<b><font color="#F88017" size=4>Improve Your Shopping Experience</font></b>
<p>
This facility will soon be made available to our customers.
This facility will help improve your shopping experience and will help you order goods without any problem of payment failure. 
</p>
</td>
</tr>
</table>
</center>

</body>
</html>