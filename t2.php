<?php 

session_start();
error_reporting(E_PARSE);

$text=" 12 34 5 7 12 ";
$a=str_split(trim($text));    

for($f=0;$f<=$_SESSION[count];++$f)
{
	//print_r($a);
$b=array();
$string="";
for($i=0;$a[$i]!="";++$i)
{
	if($a[$i]==" ")
	{
		$k=0;
		for($j=$i+1;$a[$j]!="";++$j)
		{
			$b[$k++]=$a[$j];
		}
		break;
	}
	$string=$string.$a[$i];
//++$pos;
}
//$_SESSION["pos1"]+=$pos;
$sel1="select p.name as n,p.photo as ph,p.cost as ct,p.pid as id
from product as p
where pid='".$string."'";
$l1=mysql_query($sel1) or die(mysql_error());


        $r1=mysql_fetch_array($l1);
		echo("<tr>");
		$photo=$r1['ph'];
		echo("<td><img src=\"images/products/$photo\" width=\"20\" height=\"20\"></img></td>");
		$company=$r1['nm'];
		$pname=$r1['n'];
		$cost=$r1['ct'];
		echo("<td>$pname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cost=$cost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"delete.php?pid=".$r1['id']."\" style=\"color:#000000\">x delete product</a></td>");
		echo("</tr>");
	    
for($i=0;$b[$i]!="";++$i)
{
$a[$i]=$b[$i];	
}
echo("<br><br>");
//print_r($a);
}





?>