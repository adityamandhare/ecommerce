<html>
<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
Contact Us
</title>
</head>
<body>
<script type="text/javascript">
function f()
{

confirm("Are you sure you wan't to send mail ?");
	
}

</script>

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


<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/cs4.png"></img>
<center>
<img src="images/cs2.png"></img>
</center>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<img src="images/cs3.png"></img>
<div align="left">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Contact us at:&nbsp;<b>cs@justclick.com</b>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Call us on:&nbsp;<b>27703456</b>&nbsp;&nbsp;(toll free number)
</div>
</body>
</html>