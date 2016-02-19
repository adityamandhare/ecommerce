<html>
<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
Purchase products
</title>
</head>
<body>

<script type="text/javascript">

function f()
{
	alert("This product is currently out of stock.\nPlease keep visiting our site.\nProduct will soon be made available.");
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
<br><br><br>

</body>
</html>


<?php
$con=mysql_connect("localhost","root","");
if(! $con)
    die("couldn't connect to database");
    
    mysql_select_db("shop",$con) or die ("cannot select db");

	$search=$_GET['pid'];

	
$select="select * from product where pid='".$search."'";
$l1=mysql_query($select) or die(mysql_error());
$rec=mysql_fetch_array($l1);

$comp=$rec['companyid'];
$select1="select * from company where id='".$comp."'";
$l2=mysql_query($select1) or die(mysql_error());
$rec1=mysql_fetch_array($l2);



echo(" 
<center>
<table width=\"50%\" border=1>
<tr>
<td width=\"100%\">
<table width=\"100%\" border=1>
<tr>
<td width=\"23%\">");
$p=$rec['photo'];
echo("
<img src=\"images/products/$p\" width=\"160\" height=\"250\"></img>    
</td>

<td>
<b>Name:</b>&nbsp;");
echo($rec['name']);
echo("
<br>
<br>
<b>Product Company:</b>&nbsp;");
echo($rec1['name']);
echo("
<br>
<br>
<b>Cost:</b>&nbsp;");
echo($rec['cost']);
echo("
<br><br>
<b>Discount:</b>&nbsp;");
echo($rec['discount']);
echo("
<br><br>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td width=\"100%\">
<table width=\"100%\" border=1>
<tr>
<td width=\"70%\">
<b>Description:</b><br>");
echo($rec['description']);
echo("
</td>
<td>
<br><br><br><br>
<img src=\"images/order.png\" usemap=\"#m1\"></img>
<map name=\"m1\">
");
if($rec['available']<=0)
{
	echo("<area shape=\"rect\" coords=\"15,5,212,75\" href=\"\" onclick=\"f()\">");
}
	else 
	echo("<area shape=\"rect\" coords=\"15,5,212,75\" href=\"addtocart.php?pid=".$rec['pid']." & cost=".$rec['cost']."\">");

echo("
</map>
</td>
</tr>
</table>
</td>
</tr>

</table>
</center>
");
?>
