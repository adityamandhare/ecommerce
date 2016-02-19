<?php 
session_start();   
error_reporting(E_PARSE);
	$con=mysql_connect("localhost","root","");
    if(! $con)
    die("couldn't connect to database");
    mysql_select_db("shop",$con) or die ("cannot select db");	
	
    $sm="see more..";
    
$select_product="select p.pid as id,p.name as n,p.photo as ph,c.name as nm
 from product as p,company as c
where p.companyid=c.id
order by arrival desc";

$list=mysql_query($select_product) or die(mysql_error());


$count=0;



while($count<=3)
{
	$record1=mysql_fetch_array($list);
	if($count==0)
	{
		$id1=$record1['id'];
		$n1=$record1['n'];
		$p1=$record1['ph'];
		$c1=$record1['nm'];
	}
	
if($count==1)
	{
		$id2=$record1['id'];
		$n2=$record1['n'];
		$p2=$record1['ph'];
		$c2=$record1['nm'];	}
	
if($count==2)
	{
		$id3=$record1['id'];
		$n3=$record1['n'];
		$p3=$record1['ph'];
		$c3=$record1['nm'];	
	}

if($count==3)
	{
		$id4=$record1['id'];
		$n4=$record1['n'];
		$p4=$record1['ph'];
		$c4=$record1['nm'];	
	}
	++$count;
}



$select_comp="select p.name as n,p.photo as ph,c.name as nm,p.pid as id
from product as p,company as c
where p.companyid=c.id
and category='c'
order by arrival desc";

$list1=mysql_query($select_comp) or die(mysql_error());


$count1=0;

while($count1<=3)
{
	$record1=mysql_fetch_array($list1);
	if($count1==0)
	{
		
		$cn1=$record1['n'];
		$cp1=$record1['ph'];
		$cc1=$record1['nm'];
		$cid1=$record1['id'];
	}
	
if($count1==1)
	{
		$cn2=$record1['n'];
		$cp2=$record1['ph'];
		$cc2=$record1['nm'];
        $cid2=$record1['id'];
	}
	
if($count1==2)
	{
		
		$cn3=$record1['n'];
		$cp3=$record1['ph'];
		$cc3=$record1['nm'];	
	    $cid3=$record1['id'];
	}

if($count1==3)
	{
		
		$cn4=$record1['n'];
		$cp4=$record1['ph'];
		$cc4=$record1['nm'];
		$cid4=$record1['id'];	
	}
	++$count1;
}




$select_mobile="select p.pid as id,p.name as n,p.photo as ph,c.name as nm
 from product as p,company as c
where p.companyid=c.id
and category='mt'
order by arrival desc";

$list2=mysql_query($select_mobile) or die(mysql_error());


$count2=0;

while($count2<=3)
{
	$record1=mysql_fetch_array($list2);
	if($count2==0)
	{
		$mid1=$record1['id'];
		$mn1=$record1['n'];
		$mp1=$record1['ph'];
		$mc1=$record1['nm'];
	}
	
if($count2==1)
	{
		$mid2=$record1['id'];
		$mn2=$record1['n'];
		$mp2=$record1['ph'];
		$mc2=$record1['nm'];	}
	
if($count2==2)
	{
		$mid3=$record1['id'];
		$mn3=$record1['n'];
		$mp3=$record1['ph'];
		$mc3=$record1['nm'];	
	}

if($count2==3)
	{
		$mid4=$record1['id'];
		$mn4=$record1['n'];
		$mp4=$record1['ph'];
		$mc4=$record1['nm'];	
	}
	++$count2;
}







$select_peri="select p.name as n,p.photo as ph,c.name as nm,p.pid as id
 from product as p,company as c
where p.companyid=c.id
and category='p'
order by arrival desc";

$list3=mysql_query($select_peri) or die(mysql_error());


$count3=0;

while($count3<=3)
{
	$record1=mysql_fetch_array($list3);
	if($count3==0)
	{
		$prid1=$record1['id'];
		$pn1=$record1['n'];
		$pp1=$record1['ph'];
		$pc1=$record1['nm'];
	}
	
if($count3==1)
	{
		$prid2=$record1['id'];
		$pn2=$record1['n'];
		$pp2=$record1['ph'];
		$pc2=$record1['nm'];	}
	
if($count3==2)
	{
		$prid3=$record1['id'];
		$pn3=$record1['n'];
		$pp3=$record1['ph'];
		$pc3=$record1['nm'];	
	}

if($count3==3)
	{
		$prid4=$record1['id'];
		$pn4=$record1['n'];
		$pp4=$record1['ph'];
		$pc4=$record1['nm'];	
	}
	++$count3;
}







$select_store="select p.name as n,p.photo as ph,c.name as nm,p.pid as id
 from product as p,company as c
where p.companyid=c.id
and category='s'
order by arrival desc";

$list4=mysql_query($select_store) or die(mysql_error());


$count4=0;

while($count4<=3)
{
	$record1=mysql_fetch_array($list4);
	if($count4==0)
	{
		$sid1=$record1['id'];
		$sn1=$record1['n'];
		$sp1=$record1['ph'];
		$sc1=$record1['nm'];
	}
	
if($count4==1)
	{
		$sid2=$record1['id'];
		$sn2=$record1['n'];
		$sp2=$record1['ph'];
		$sc2=$record1['nm'];	}
	
if($count4==2)
	{
		$sid3=$record1['id'];
		$sn3=$record1['n'];
		$sp3=$record1['ph'];
		$sc3=$record1['nm'];	
	}

if($count4==3)
	{
		$sid4=$record1['id'];
		$sn4=$record1['n'];
		$sp4=$record1['ph'];
		$sc4=$record1['nm'];	
	}
	++$count4;
}


$select_e="select p.name as n,p.photo as ph,c.name as nm,p.pid as id
 from product as p,company as c
where p.companyid=c.id
and category='e'
order by arrival desc";

$list5=mysql_query($select_e) or die(mysql_error());


$count5=0;

while($count5<=3)
{
	$record1=mysql_fetch_array($list5);
	if($count5==0)
	{
		$eid1=$record1['id'];
		$en1=$record1['n'];
		$ep1=$record1['ph'];
		$ec1=$record1['nm'];
	}
	
if($count5==1)
	{
		$eid2=$record1['id'];
		$en2=$record1['n'];
		$ep2=$record1['ph'];
		$ec2=$record1['nm'];	}
	
if($count5==2)
	{
		$eid3=$record1['id'];
		$en3=$record1['n'];
		$ep3=$record1['ph'];
		$ec3=$record1['nm'];	
	}

if($count5==3)
	{
		$eid4=$record1['id'];
		$en4=$record1['n'];
		$ep4=$record1['ph'];
		$ec4=$record1['nm'];	
	}
	++$count5;
}













?>


<html>
<head>
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
Just Click-shopping is just a click away
</title>

<link rel="stylesheet" href="pattern1.css">
</head>
<body>

<center>
<table width="90%" border=0>
<tr>
<td width="19%">
<center>
<img src="images/shopbag.jpg" height=150 width=150></img>
</center>
</td>

<td>
<table width="100%" height=80  bgcolor="#38ACEC" border=0>
<tr>
<td>
<font color="#FFFFFF" face="Elephant" size="10">
&nbsp;&nbsp; 
Just Click</font>&nbsp; <font color="#FFFFFF" face="Elephant" size="4"><sub>.com</sub>
</font>

<p align="right">
<font color="#000000" face="Times New Roman" size="3">
<?php 
$check1=0;
$check1=$_SESSION["user"];
if($check1==1)
echo("<a href=\"home.php\" style=\"color:#FFFFFF\">Home</a> | <a href=\"logout.php\" style=\"color:#FFFFFF\">Logout</a> | <a href=\"wallet.php\" style=\"color:#FFFFFF\">Wallet</a> | <a href=\"register1.php\" style=\"color:#FFFFFF\">Register</a> | <a href=\"contactus.php\" style=\"color:#FFFFFF\">Contact Us</a>");
else 
echo("<a href=\"home.php\" style=\"color:#FFFFFF\">Home</a> | <a href=\"login.php\" style=\"color:#FFFFFF\">Login</a> | <a href=\"wallet.php\" style=\"color:#FFFFFF\">Wallet</a> | <a href=\"register1.php\" style=\"color:#FFFFFF\">Register</a> | <a href=\"contactus.php\" style=\"color:#FFFFFF\">Contact Us</a>");
?>
</font>
</p>
</td>
</tr>
</table>
</td>

<td width="19%">
<center>
<img src="images/p1.png" height=150 width=150></img>
</center>
</td>
</tr>
</table>
</center>
<center>
<?php 

if(isset($_POST['search']))
{


	$category=stripslashes(trim($_POST['cat']));
	$subcategory=stripslashes(trim($_POST['sub']));
	if($category!="ac" && $subcategory!="st")
	{
	$_SESSION["searchbar"]=1;
	$_SESSION["c"]=$category;
    $_SESSION["sc"]=$subcategory;
    $_SESSION["moreprod"]=0;
    header('Location:more_products.php');
	}
}

?>
<form action="home.php" method="POST" id="f1">
<table bgcolor="#38ACEC" width="89%" border=0>
<tr>
<td width="75%">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;
<font color="#FFFFFF">
Search:&nbsp;
</font>
<select name="cat">
<option value="ac">All Categories</option>
<option value="c">Computer</option>
<option value="mt">Mobile & Tablet</option>
<option value="p">Peripherals</option>
<option value="s">Secondary Storage</option>
<option value="e">Entertainment</option>
</select>
&nbsp;&nbsp;
<font color="#FFFFFF">
Item type:
&nbsp;
<select name="sub">
<option value="st">Select type</option>
<option value="c1">Desktop</option>
<option value="c2">Laptop</option>
<option value="mt1">Mobile</option>
<option value="mt2">Tablet</option>
<option value="p1">Printer</option>
<option value="p2">Speakers</option>
<option value="s1">Pendrive</option>
<option value="s2">P_Hard disk</option>
<option value="e1">Mp3 player</option>
<option value="e2">Headset</option>
<option value="e3">Play station</option>
</select>
</font>
&nbsp;
<input type="submit" name="search" value="search">
</td>
<td>
<a href="cart.php"><img src="images/cart.png"></img></a>
</td>
</tr>
</table>
</form>
</center>
<br>



<center>
<table width="90%" border=0>
<tr>

<td width="19%">
<center>
<img src="images/ac1.png"></img>
</center>
</td>


<td>
<center>
<table border=0>
<tr rowspan="4">
<td>
<img src="images/lp.png"></img>
</td>
</tr>

<tr>
<td>
<?php 
echo("
<table width=\"100%\" border=0>
<tr>
<td width=\"25%\">
<center><img src=\"images/products/$p1\" width=\"110\" height=\"110\"></img>
<br>
$c1:$n1
<br>
<a href=\"product.php?pid=".$id1."\">$sm</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$p2\" width=\"110\" height=\"110\"></img>
<br>
$c2:$n2
<br>
<a href=\"product.php?pid=".$id2."\">$sm</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$p3\" width=\"110\" height=\"110\"></img>
<br>
$c3:$n3
<br>
<a href=\"product.php?pid=".$id3."\">$sm</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$p4\" width=\"110\" height=\"110\"></img>
<br>
$c4:$n4
<br>
<a href=\"product.php?pid=".$id4."\">$sm</a>
</center>
</td>
</tr>
</table>
");
?>
</td>
</tr>
</table>
</center>
</td>

<td width="19%">
<center>
<?php
$check=0;
$check=$_SESSION["user"];
if($check==1)
echo("
<a href=\"prefer.php\"><img src=\"images/pref.png\"></img></a>");
else 
echo("
<a href=\"register1.php\"><img src=\"images/r6.jpg\" width=\"208\" height=\"180\"></img></a>");
?>
</center>
</td>


</tr>
</table>
</center>

<br><br>

<center>
<table width="90%" border=0>
<tr>

<td width="19%">
<center>
<img src="images/logo/dell.jpg" width="100" height="100"></img>
</center>
</td>


<td>
<center>
<table border=0>
<tr rowspan="4">
<td>
<img src="images/computertask.png" usemap="#m1"></img>
<map name="m1">
<area shape="rect" coords="620,10,700,15" href="morecomp.php">
</map>


</td>
</tr>
<?php 
echo("
<tr>
<td>
<table width=\"100%\" border=0>
<tr>
<td width=\"25%\">
<center><img src=\"images/products/$cp1\" width=\"110\" height=\"110\"></img>
<br>
$cc1:$cn1
<br>
<a href=\"product.php?pid=".$cid1."\">$sm</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$cp2\" width=\"110\" height=\"110\"></img>
<br>
$cc2:$cn2
<br>
<a href=\"product.php?pid=".$cid2."\">$sm</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$cp3\" width=\"110\" height=\"110\"></img>
<br>
$cc3:$cn3
<br>
<a href=\"product.php?pid=".$cid3."\">$sm</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$cp4\" width=\"110\" height=\"110\"></img>
<br>
$cc4:$cn4
<br>
<a href=\"product.php?pid=".$cid4."\">$sm</a>
</center>
</td>
</tr>
");

?>
</table>
</td>
</tr>
</table>
</center>
</td>


<td width="19%">
<center>
<img src="images/logo/sony1.jpg" width="100" height="100"></img>
</center>
</td>


</tr>
</table>
</center>


<br><br>


<center>
<table width="90%" border=0>
<tr>

<td width="19%">
<center>
<img src="images/logo/nokia.jpg" width="100" height="100"></img>
</center>
</td>


<td>
<center>
<table border=0>
<tr rowspan="4">
<td>
<img src="images/mobiletask.png" usemap="#m2"></img>
<map name="m2">
<area shape="rect" coords="620,10,700,15" href="moremob.php">
</map>
</td>
</tr>






<?php 
echo("
<tr>
<td>
<table width=\"100%\" border=0>
<tr>
<td width=\"25%\">
<center><img src=\"images/products/$mp1\" width=\"110\" height=\"110\"></img>
<br>
$mc1:$mn1
<br>
<a href=\"product.php?pid=".$mid1."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$mp2\" width=\"110\" height=\"110\"></img>
<br>
$mc2:$mn2
<br>
<a href=\"product.php?pid=".$mid2."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$mp3\" width=\"110\" height=\"110\"></img>
<br>
$mc3:$mn3
<br>
<a href=\"product.php?pid=".$mid3."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$mp4\" width=\"110\" height=\"110\"></img>
<br>
$mc4:$mn4
<br>
<a href=\"product.php?pid=".$mid4."\">see more</a>
</center>
</td>
</tr>
");

?>






</table>
</td>
</tr>
</table>
</center>
</td>


<td width="19%">
<center>
<img src="images/logo/spice.jpg" width="100" height="100"></img>
</center>
</td>


</tr>
</table>
</center>


<br><br>





<center>
<table width="90%" border=0>
<tr>

<td width="19%">
<center>
<img src="images/logo/hp.jpg" width="100" height="100"></img>
</center>
</td>


<td>
<center>
<table border=0>
<tr rowspan="4">
<td>
<img src="images/peripheraltask.png" usemap="#m3"></img>
<map name="m3">
<area shape="rect" coords="620,10,700,15" href="moreperi.php">
</map>
</td>
</tr>



<?php 
echo("
<tr>
<td>
<table width=\"100%\" border=0>
<tr>
<td width=\"25%\">
<center><img src=\"images/products/$pp1\" width=\"110\" height=\"110\"></img>
<br>
$pc1:$pn1
<br>
<a href=\"product.php?pid=".$prid1."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$pp2\" width=\"110\" height=\"110\"></img>
<br>
$pc2:$pn2
<br>
<a href=\"product.php?pid=".$prid2."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$pp3\" width=\"110\" height=\"110\"></img>
<br>
$pc3:$pn3
<br>
<a href=\"product.php?pid=".$prid3."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$pp4\" width=\"110\" height=\"110\"></img>
<br>
$pc4:$pn4
<br>
<a href=\"product.php?pid=".$prid4."\">see more</a>
</center>
</td>
</tr>
");

?>



</table>
</td>
</tr>
</table>
</center>
</td>
<td width="19%">
<center>
<img src="images/logo/ibm.jpg" width="100" height="100"></img>
</center>
</td>


</tr>
</table>
</center>



<br><br>


<center>
<table width="90%" border=0>
<tr>

<td width="19%">
<center>
<img src="images/logo/intel.jpg" width="100" height="100"></img>
</center>
</td>


<td>
<center>
<table border=0>
<tr rowspan="4">
<td>
<img src="images/sstask.png" usemap="#m4"></img>
<map name="m4">
<area shape="rect" coords="620,10,700,15" href="morestore.php">
</map>
</td>
</tr>




<?php 
echo("
<tr>
<td>
<table width=\"100%\" border=0>
<tr>
<td width=\"25%\">
<center><img src=\"images/products/$sp1\" width=\"110\" height=\"110\"></img>
<br>
$sc1:$sn1
<br>
<a href=\"product.php?pid=".$sid1."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$sp2\" width=\"110\" height=\"110\"></img>
<br>
$sc2:$sn2
<br>
<a href=\"product.php?pid=".$sid2."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$sp3\" width=\"110\" height=\"110\"></img>
<br>
$sc3:$sn3
<br>
<a href=\"product.php?pid=".$sid3."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$sp4\" width=\"110\" height=\"110\"></img>
<br>
$sc4:$sn4
<br>
<a href=\"product.php?pid=".$sid4."\">see more</a>
</center>
</td>
</tr>
");

?>


</table>
</td>
</tr>
</table>
</center>
</td>
<td width="19%">
<center>
<img src="images/logo/nvidia.jpg" width="100" height="100"></img>
</center>
</td>


</tr>
</table>
</center>



<br><br>




<center>
<table width="90%" border=0>
<tr>

<td width="19%">
<center>
<img src="images/logo/videocon.jpg" width="100" height="100"></img>
</center>
</td>


<td>
<center>
<table border=0>
<tr rowspan="4">
<td>
<img src="images/enttask.png" usemap="#m5"></img>
<map name="m5">
<area shape="rect" coords="620,10,700,15" href="moreent.php">
</map>
</td>
</tr>



<?php 
echo("
<tr>
<td>
<table width=\"100%\" border=0>
<tr>
<td width=\"25%\">
<center><img src=\"images/products/$ep1\" width=\"110\" height=\"110\"></img>
<br>
$ec1:$en1
<br>
<a href=\"product.php?pid=".$eid1."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$ep2\" width=\"110\" height=\"110\"></img>
<br>
$ec2:$en2
<br>
<a href=\"product.php?pid=".$eid2."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$ep3\" width=\"110\" height=\"110\"></img>
<br>
$ec3:$en3
<br>
<a href=\"product.php?pid=".$eid3."\">see more</a>
</center>
</td>

<td width=\"25%\">
<center><img src=\"images/products/$ep4\" width=\"110\" height=\"110\"></img>
<br>
$ec4:$en4
<br>
<a href=\"product.php?pid=".$eid4."\">see more</a>
</center>
</td>
</tr>
");

?>

</table>
</td>
</tr>
</table>
</center>
</td>
<td width="19%">
<center>
<img src="images/logo/apple.jpg" width="120" height="120"></img>
</center>
</td>


</tr>
</table>
</center>










</body>
</html>