
<html>
<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
View More Products
</title>
</head>
<body>
<center>
<table width="100%" height=80  bgcolor="#38ACEC">
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

<form id="f1" method="post" action="more_products.php">
<center>
<table>
<tr>
<td>
<input type="submit" name="b1" value="Sort by cost">
</td>
<td>
<input type="submit" name="b2" value="Sort by arrival date">
</td>
<td>
<input type="submit" name="b3" value="Group by product category">
</td>
<td>
<input type="submit" name="b4" value="Group by company">
</td>


</tr>

</table>
</center>
</form>
<center>

<?php 
$con=mysql_connect("localhost","root","");
    if(! $con)
    die("couldn't connect to database");
    mysql_select_db("shop",$con) or die ("cannot select db");	

    if($_SESSION["searchbar"]==1)
    {
    	    	
    	$c=$_SESSION["c"];
    	$sc=$_SESSION["sc"];
    	
    	$s1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id,c.name as nm
 from product as p,company as c
where p.companyid=c.id and category='".$c."' and subcategory='".$sc."'
order by arrival desc";
	$l1=mysql_query($s1) or die(mysql_error());
	
    if(isset($_POST['b1']))
	{
	$s1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id,c.name as nm
 from product as p,company as c
where p.companyid=c.id and category='".$c."' and subcategory='".$sc."'
order by cost";
	$l1=mysql_query($s1) or die(mysql_error());
		
	}
	if(isset($_POST['b2']))
	{
	$s1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id,c.name as nm
 from product as p,company as c
where p.companyid=c.id and category='".$c."' and subcategory='".$sc."'
order by arrival desc";
	$l1=mysql_query($s1) or die(mysql_error());
	}
	
	if(isset($_POST['b3']))
	{
	$s1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id,c.name as nm
 from product as p,company as c
where p.companyid=c.id and category='".$c."' and subcategory='".$sc."'
order by subcategory";
	$l1=mysql_query($s1) or die(mysql_error());
	}
	
	
	if(isset($_POST['b4']))
	{
	$s1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id,c.name as nm
 from product as p,company as c
where p.companyid=c.id and category='".$c."' and subcategory='".$sc."'
order by c.name";
	$l1=mysql_query($s1) or die(mysql_error());
	}
	
	
	
	
	
	echo("
	<center>
	<table width=\"30%\" border=1>");
	while($r1=mysql_fetch_array($l1))
	{
		echo("<tr>");
		$photo=$r1['ph'];
		echo("<td width=\"40%\"><img src=\"images/products/$photo\" width=\"110\" height=\"110\"></img></td>");
		$company=$r1['nm'];
		$pname=$r1['n'];
		$cost=$r1['ct'];
		echo("<td>$company : $pname<br>cost=$cost<br><br><a href=\"product.php?pid=".$r1['id']."\" style=\"color:#000000\">see more...</a></td>");
		echo("</tr>");
	    
	
	
	
	}
	echo("
	</table>
	</center>
	");
	
	
    }
    
    else {
    $p=0;
    if($_SESSION["moreprod"]==1)
    $p="c";
    else
    if($_SESSION["moreprod"]==2)
    $p="mt";
     else
     if($_SESSION["moreprod"]==3)
     $p="p";
      else
      if($_SESSION["moreprod"]==4)
      $p="s"; 
      else
      if($_SESSION["moreprod"]==5)
      $p="e";
      
      
	$s1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id,c.name as nm
 from product as p,company as c
where p.companyid=c.id and category='".$p."'
order by arrival desc";
	$l1=mysql_query($s1) or die(mysql_error());
	
	if(isset($_POST['b1']))
	{
	$s1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id,c.name as nm
 from product as p,company as c
where p.companyid=c.id and category='".$p."'
order by cost";
	$l1=mysql_query($s1) or die(mysql_error());
		
	}
	if(isset($_POST['b2']))
	{
	$s1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id,c.name as nm
 from product as p,company as c
where p.companyid=c.id and category='".$p."'
order by arrival desc";
	$l1=mysql_query($s1) or die(mysql_error());
	}
	
	if(isset($_POST['b3']))
	{
	$s1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id,c.name as nm
 from product as p,company as c
where p.companyid=c.id and category='".$p."'
order by subcategory";
	$l1=mysql_query($s1) or die(mysql_error());
	}
	
	
	if(isset($_POST['b4']))
	{
	$s1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id,c.name as nm
 from product as p,company as c
where p.companyid=c.id and category='".$p."'
order by c.name";
	$l1=mysql_query($s1) or die(mysql_error());
	}
	
echo("
	<center>
	<table width=\"30%\" border=1>");
	while($r1=mysql_fetch_array($l1))
	{
		echo("<tr>");
		$photo=$r1['ph'];
		echo("<td width=\"40%\"><img src=\"images/products/$photo\" width=\"110\" height=\"110\"></img></td>");
		$company=$r1['nm'];
		$pname=$r1['n'];
		$cost=$r1['ct'];
		echo("<td>$company : $pname<br>cost=$cost<br><br><a href=\"product.php?pid=".$r1['id']."\" style=\"color:#000000\">see more...</a></td>");
		echo("</tr>");
	    
	}
	echo("
	</table>
	</center>
	");
    }
?>

</center>


</body>
</html>