<html>
<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
Register-Step1
</title>
</head>

<body>
<script type="text/javascript">
function f2()
{
	alert("go back to home page");
}

function f1(a,b,c)
{
	var v=0;
if(f.username.value=="")
{
	v=1;
	alert("You need to enter username/email-id");
}

if(f.password.value=="" && v!=1)
{
    v=2;
	alert("You need to enter a password for your account");
}

if(f.cpassword.value=="" && v!=2 && v!=1)
{  
	v=3;
	alert("You need to re-enter your password to confirm it");
}

if(v==0)
{
	var x=checkmail(c);
if(x==1)
	checkpassword(a,b);
}

}

function checkpassword(a,b)
{

	if(a!=b)
	{
alert("The password you have entered does not match");
	}
}

function checkmail(c)
{
	var s1=f.username.value.indexOf("@");
	var s2=f.username.value.lastIndexOf(".");
	    
if(s1==-1 || s1==0 || s2==-1 || s2==0)
{
	alert("Incorrect Email-id");
return -1;
}
else
	return 1;
	
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

<center>
<form id="f" action="register1.php" method="post">
<h1>Account Information:</h1>
<br>
<br>
<?php 
if(isset($_POST['next']))
{
$flag=0;

$username=stripslashes(trim($_POST['username']));
$password=stripslashes(trim($_POST['password']));
$cpassword=stripslashes(trim($_POST['cpassword']));

if($username=="")
{
	echo("<font color=\"#800000\"><b>Enter your username.<br></b></font>");
	$flag=1;
}
if($password=="")
{
	echo("<font color=\"#800000\"><b>Enter a password.<br></b></font>");
	$flag=1;
}
if($cpassword=="")
{
	echo("<font color=\"#800000\"><b>Reenter password to confirm.<br></b></font>");
	$flag=1;
}
if($password!=$cpassword && $password!="" && $cpassword!="")
{
	echo("<font color=\"#800000\"><b>Password does not match.<br></b></font>");
    $flag=1;
}
$p1=substr($username,0,1);
if($p1=='@')
{
	$flag=1;
}
if($p1=='.')
{
	$flag=1;
}
$s1="@";
$s2=".";
$c1=substr_count($username,$s1);
$c2=substr_count($username,$s2);

if($c1==0 || $c1>1)
{
	$flag=1;
}
if($c2==0)
{
	$flag=1;
}

if($username!="" && $flag==1)
{
	$flag=1;
	echo("<font color=\"#800000\"><b>Incorrect Email id<br></b></font>");
}

if($flag==0)
{
	$con=mysql_connect("localhost","root","");
    if(! $con)
    die("couldn't connect to database");
    mysql_select_db("shop",$con) or die("cannot select db");	
	
    
    
    $select_record="select * from customer where mail='".$username."'";
    
    $select_query=mysql_query($select_record) or die(mysql_error());
    if(mysql_num_rows($select_query)==0)
    {
    $insquery="insert into customer(mail,password)values('$username','$password')";
    mysql_query($insquery) or die(mysql_error());
    
    $_SESSION["complete_step1"]=1;
    $_SESSION['userid']=$username;
    
    header('Location:register2.php');

    }
    else echo("<font color=\"#800000\"><b>We already have an account with this username.Please use some other Username</b></font><br>");
    
}

}
?>
<br>
Username/Email-id:&nbsp;&nbsp;
<input type="text" name="username">
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Password:&nbsp;&nbsp;
<input type="password" name="password">
<br><br>
&nbsp;
Confirm password:&nbsp;&nbsp;
<input type="password" name="cpassword">
<br><br>
<br><br>
<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
<input type="submit" name="next" value="Next step" onclick="f1(f.password.value,f.cpassword.value,f.username.value)">
&nbsp;&nbsp;
<input type="submit" name="back" value="Back">
</center>

</form>
</center>
</body>
</html>
<?php
if(isset($_POST['back']))
header('Location:home.php');
?>