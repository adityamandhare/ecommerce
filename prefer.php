
<html>
<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
Check What's New!
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
<font color="#000000" face="Times New Roman" size="4">
<a href="home.php">Home</a> | <a href="contactus.php">Contact Us</a>  
</font>
</p>
</td>
</tr>
</table>
</center>
</body>
</html>


<?php 
session_start();
error_reporting(E_PARSE);


    $con=mysql_connect("localhost","root","");
    if(! $con)
    die("couldn't connect to database");
    mysql_select_db("shop",$con) or die ("cannot select db");	

$s1="select * from customer where mail='".$_SESSION[logged]."'";
$l1=mysql_query($s1) or die(mysql_error());
$rec=mysql_fetch_array($l1);


$c1=$rec['comp'];
$mt1=$rec['smartphone'];
$st1=$rec['storage'];
$pt1=$rec['printer'];

if($c1=='D')
{
	$c1="c1";
}
else 
{
	$c1="c2";
}

if($mt1=='Y')
{
	$mt1="mt1";
}
else 
$mt1="mt2";


if($st1=='Y')
{
	$st1="s2";
}
else 
$st1="s1";

if($pt1=='I')
{
	$pt1="p1";
}
else 
$pt1="p2";

echo("<center><br><br>");


$select_comp="select p.name as n,p.photo as ph,c.name as nm
 from product as p,company as c
where p.companyid=c.id
and p.category='c' and subcategory='".$c1."'order by arrival desc"; 

$list1=mysql_query($select_comp) or die(mysql_error());

$count1=0;

while($count1<=1)
{
	$record1=mysql_fetch_array($list1);
	if($count1==0)
	{
		$cn1=$record1['n'];
		$cp1=$record1['ph'];
		$cc1=$record1['nm'];
	}
	
if($count1==1)
	{
		$cn2=$record1['n'];
		$cp2=$record1['ph'];
		$cc2=$record1['nm'];	
	}

++$count1;
}

$select_mobile="select p.name as n,p.photo as ph,c.name as nm
 from product as p,company as c
where p.companyid=c.id
and category='mt' and subcategory='".$mt1."'
order by arrival";

$list2=mysql_query($select_mobile) or die(mysql_error());


$count2=0;

while($count2<=1)
{
	$record1=mysql_fetch_array($list2);
	if($count2==0)
	{
		$mn1=$record1['n'];
		$mp1=$record1['ph'];
		$mc1=$record1['nm'];
	}
	
if($count2==1)
	{
		$mn2=$record1['n'];
		$mp2=$record1['ph'];
		$mc2=$record1['nm'];	
	}
	
	++$count2;
}

$select_store="select p.name as n,p.photo as ph,c.name as nm
 from product as p,company as c
where p.companyid=c.id
and category='s' and subcategory='".$st1."'
order by arrival";

$list4=mysql_query($select_store) or die(mysql_error());


$count4=0;

while($count4<=1)
{
	$record1=mysql_fetch_array($list4);
	if($count4==0)
	{
		$sn1=$record1['n'];
		$sp1=$record1['ph'];
		$sc1=$record1['nm'];
	}
	
if($count4==1)
	{
		$sn2=$record1['n'];
		$sp2=$record1['ph'];
		$sc2=$record1['nm'];	
	}
	++$count4;
}

$select_printer="select p.name as n,p.photo as ph,c.name as nm
 from product as p,company as c
where p.companyid=c.id
and category='p' and subcategory='".$pt1."'
order by arrival";

$list5=mysql_query($select_printer) or die(mysql_error());


$count5=0;

while($count5<=1)
{
	$record1=mysql_fetch_array($list5);
	if($count5==0)
	{
		$pn1=$record1['n'];
		$pp1=$record1['ph'];
		$pc1=$record1['nm'];
	}
	
if($count5==1)
	{
		$pn2=$record1['n'];
		$pp2=$record1['ph'];
		$pc2=$record1['nm'];	
	}
	++$count5;
}
	
	echo("
<table width=\"100%\" border=0>
<tr>
<td width=\"25%\">
<center><img src=\"images/products/$cp1\" width=\"110\" height=\"110\"></img>
<br>
$cc1:$cn1
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$cp2\" width=\"110\" height=\"110\"></img>
<br>
$cc2:$cn2
</center>
</td>
	</tr>
	</table>
	<br><br>
	
	<table width=\"100%\" border=0>
<tr>
<td width=\"25%\">
<center><img src=\"images/products/$mp1\" width=\"110\" height=\"110\"></img>
<br>
$mc1:$mn1
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$mp2\" width=\"110\" height=\"110\"></img>
<br>
$mc2:$mn2
</center>
</td>
	</tr>
	</table>
	<br><br>
	
	<table width=\"100%\" border=0>
<tr>
<td width=\"25%\">
<center><img src=\"images/products/$sp1\" width=\"110\" height=\"110\"></img>
<br>
$sc1:$sn1
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$sp2\" width=\"110\" height=\"110\"></img>
<br>
$sc2:$sn2
</center>
</td>
</tr>
</table>

<br><br>
<table width=\"100%\" border=0>
<tr>
<td width=\"25%\">
<center><img src=\"images/products/$pp1\" width=\"110\" height=\"110\"></img>
<br>
$pc1:$pn1
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$pp2\" width=\"110\" height=\"110\"></img>
<br>
$pc2:$pn2
</center>
</td>
	</tr>
	</table>


");

echo("</center>");
?>


