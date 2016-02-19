<?php 
session_start();
error_reporting(E_PARSE);
$text=" 147 23 45 7 245 78 6 45";
$a=str_split(trim($text));
print_r($a);
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

}

echo($string);
print_r($b);


$_SESSION["arr"]=$a;

?>