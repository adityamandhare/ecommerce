<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
Purchase products
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
<br>

<center>
<table width="47%" border=1>
<tr>
<td width="100%">

<img src="images/step44.png" usemap="#mymap"></img>

</td>
</tr>
<tr>
<td>
<center>
Your Order Has Been Confirmed.<br><br>
Payment Should Be Done After Delivery Of Goods.
</center>
</td>
</tr>
<tr>
<td>
<img src="images/safe.png"></img>
</td>
</tr>
</table>

</center>
</body>

</html>
