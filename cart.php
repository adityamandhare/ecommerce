<?php 
session_start();
error_reporting(E_PARSE);
/*
$con=mysql_connect("localhost","root","");
    if(! $con)
    die("couldn't connect to database");
    mysql_select_db("shop",$con) or die ("cannot select db");	
*/
  /*  $newproduct=$_GET['pid'];

    $_SESSION["count"]=$_SESSION[count]+1;
    
    $_SESSION["bill"]=$_SESSION[bill]+$_GET['cost'];
        
    $_SESSION["kart"]=$_SESSION["kart"]." ".$newproduct;
*/
//echo($_SESSION[kart]);
    
$flag123=0;
if(isset($_POST['order']))
{
	$_SESSION["purch"]=1;
	
	if($_SESSION[user]==1)
	header('Location:purchase3.php');
    else 
    header('Location:purchase1.php');
}
?>
<html>
<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
Your Cart
</title>
</head>
<body>
<center>
<table width="50%" height=80  bgcolor="#38ACEC">
<tr>
<td>
<font color="#FFFFFF" face="Elephant" size="10">
&nbsp;&nbsp;&nbsp;&nbsp; 
Your Cart</font>&nbsp; <font color="#FFFFFF" face="Elephant" size="4">
</font>
<br><br>

<p align="right">
<font color="#000000" face="Times New Roman" size="3">
<a href="home.php"><b>Close cart and continue shopping</b></a> 
</font>
</p>
</td>
</tr>
</table>
</center>
<br><br>
<center>
<?php 
$con=mysql_connect("localhost","root","");
    if(! $con)
    die("couldn't connect to database");
    mysql_select_db("shop",$con) or die ("cannot select db");	
    
if($_SESSION[kart]=="")
{
	echo("<b><font color=\"#800000\">Your cart is empty</font></b>");
$flag123=1;
}   
else {	
$a=str_split(trim($_SESSION[kart]));
for($f=0;$f<$_SESSION[count];++$f)
{
$b=array();
$string="";
for($i=0;$a[$i]!="";++$i)
{
	if($a[$i]==" ")
	{
		$k=0;
		for($j=$i+2;$a[$j]!="";++$j)
		{
			$b[$k++]=$a[$j];
		}
		break;
	}
	$string=$string.$a[$i];
}

//$string=trim($string);
//echo("P ".$string);
$sel1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id
from product as p
where p.pid='".$string."'";
$l1=mysql_query($sel1) or die(mysql_error());
 $r1=mysql_fetch_array($l1);
 

	
 echo("<tr>");
		$photo=$r1['ph'];
		echo("<td width=\"10%\"><img src=\"images/products/$photo\" width=\"40\" height=\"40\"></img></td>");
		$pname=$r1['n'];
		$cost=$r1['ct'];
		echo("<td>&nbsp;&nbsp;$pname</td><td>&nbsp;&nbsp;&nbsp;cost=$cost</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"delete.php?pid=".$r1['id']." & cost=".$cost."   \" style=\"color:#000000\">delete product</a></td>");
		echo("</tr>");
		
		for($i=0;$i<100;++$i)
		$a[$i]=" ";
		
for($i=0;$b[$i]!="";++$i)
{
$a[$i]=$b[$i];	
}
echo("<br><br>");

}

}
?>

</center>
<br>
<center>
<table width="47%">
<tr>
<td width="100%">
<center>
<?php
if($flag123==0)
{echo("Total cost="); echo($_SESSION[bill]);} ?>
</center>
</td>
</tr>
</table>
</center>
<br>
<center>
<form id="f1" action="cart.php" method="post">
<?php 
if($flag123==0)
echo("<input type=\"submit\" name=\"order\" value=\"Place Order\">");
?>
<br>

</form>
</center>

</body>
</html>