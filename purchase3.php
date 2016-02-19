<?php 
session_start();
error_reporting(E_PARSE);
if($_SESSION[pur2]==1 || $_SESSION[member]==1 || $_SESSION[purch]==1)
{
if(isset($_POST['submit']))
{
 $con=mysql_connect("localhost","root","");
    if(! $con)
    die("couldn't connect to database");
    mysql_select_db("shop",$con) or die ("cannot select db");	
     
    if($_SESSION[user]==1)
    {
    $sel="select * from customer where mail='".$_SESSION[logged]."'";
    $l=mysql_query($sel) or die(mysql_error());	
    $rec=mysql_fetch_array($l);
    
    $m=$rec['mail'];
    $n=$rec['name'];
    $c=$rec['contact'];
    $ct=$rec['city'];
    $a=$rec['address'];
    $p=$rec['pin'];
    $k=$_SESSION[kart];
    $b=$_SESSION[bill];
    

$ins="insert into sale(mail,name,contact,city,address,pin,items,amt)values('$m','$n','$c','$ct','$a','$p','$k','$b')";
    mysql_query($ins) or die(mysql_error());
    
    $compute_query="update sale set date1=CURDATE() where mail='".$_SESSION[logged]."'";
  mysql_query($compute_query) or die(mysql_error());
    }
    else 
    {
$ins="insert into sale (mail)values('$_SESSION[notregister]')";
mysql_query($ins) or die(mysql_error());
    
  $update_query="update sale set name='".$_SESSION[purname]."', contact='".$_SESSION[purcontact]."', city='".$_SESSION[purcity]."', address='".$_SESSION[puraddress]."', pin='".$_SESSION[purpin]."', items='".$_SESSION[kart]."', amt='".$_SESSION[bill]."' where mail='".$_SESSION[notregister]."'";
  mysql_query($update_query) or die(mysql_error());
         
  $compute_query="update sale set date1=CURDATE() where mail='".$_SESSION[notregister]."'";
  mysql_query($compute_query) or die(mysql_error());
    }
    if($_SESSION[user]==1)
    {
    	$resume_session=$_SESSION[logged];
    	session_destroy();
    	session_start();
    	$_SESSION["logged"]=$resume_session;
    	$_SESSION["user"]=1;
    	/*
    	$_SESSION["kart"]="";
        $_SESSION["bill"]=0; */
    }
   if($_SESSION[user]!=1) 
   	session_destroy();    
   	
  header('Location:purchase4.php');

}
  ?>
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

if($_SESSION[user]==1)
echo("<a href=\"home.php\" style=\"color:#FFFFFF\">Home</a> | <a href=\"wallet.php\" style=\"color:#FFFFFF\">Wallet</a> | <a href=\"contactus.php\" style=\"color:#FFFFFF\">Contact Us</a>");
else 
echo("<a href=\"home.php\" style=\"color:#FFFFFF\">Home</a> | <a href=\"wallet.php\" style=\"color:#FFFFFF\">Wallet</a> | <a href=\"contactus.php\" style=\"color:#FFFFFF\">Contact Us</a>");
?>

</font>
</p>
</td>
</tr>
</table>
</center>
<center>
<br>

<table width="47%" border=1>
<tr>
<td width="100%">
<img src="images/step33.png" usemap="#mymap"></img>
<map name="mymap">
<area shape="polygon" coords="0,0,137,0,139,17,137,35,0,35" href="purchase1.php">
<area shape="polygon" coords="133,0,306,0,308,17,306,35,133,35,140,17" href="purchase2.php">
</map>
</td>
</tr>
<tr>
<td width="100%">
<img src="images/revieworder.png"></img>
</td>
</tr>
</table>

<center>
<table width="47%" border=1>
<tr>
<?php 
$con=mysql_connect("localhost","root","");
    if(! $con)
    die("couldn't connect to database");
    mysql_select_db("shop",$con) or die ("cannot select db");	
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
$sel1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id
from product as p
where pid='".$string."'";
$l1=mysql_query($sel1) or die(mysql_error());
 $r1=mysql_fetch_array($l1);
		echo("<tr>");
		$photo=$r1['ph'];
		echo("<td width=\"10%\"><img src=\"images/products/$photo\" width=\"40\" height=\"40\"></img></td>");
		$pname=$r1['n'];
		$cost=$r1['ct'];
		echo("<td>&nbsp;&nbsp;$pname</td><td>&nbsp;&nbsp;&nbsp;&nbsp;cost=$cost</td>");
		echo("</tr>");
for($i=0;$b[$i]!="";++$i)
{
$a[$i]=$b[$i];	
}
echo("<br><br>");
}
?>
</tr>
</table>

<br>
<table width="47%">
<tr>
<td width="100%">
<center>
Total cost=<?php echo($_SESSION[bill]); ?>
</center>
</td>
</tr>
</table>
<br>
<table>
<tr>
<td>
<img src="images/line.png"></img>

<center>
<form action="purchase3.php" id="f1" method="post">
<input type="submit" name="submit" value="Continue">
</form>
</center>
</td>
</tr>
</table>


<br><br>
</center>
<center>
<img src="images/safe.png"></img>
</center>


</body>

</html>
<?php 
}
?>