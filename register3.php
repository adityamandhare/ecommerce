<?php 
session_start();
error_reporting(E_PARSE);
if($_SESSION[complete_step2]==1)
{
?>
<html>
<head>
<link rel="stylesheet" href="pattern.css">
<link rel="icon" href="images/j1.ico" type="image/x-icon">
<title>
Register-Step3
</title>
</head>
<body>
<script type="text/javascript">

function f()
{
	alert("Your preferences will help us serve you better.");
	
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
<table width="80%">
<tr>
<td width="100%">
<div>
<h1>Preferences:</h1>
<p>

Dear user,the questions below will help us guide you,while you shop on our site.
We notify you of the latest arrivals of your preference.
<br>
Please answer the questionnaire to enable us to  <i>Serve You Better!!</i>
</p>

<form id="f1" method="POST" action="register3.php">
Which one do you prefer?
<br>
<input type="radio" name="comp" value="D">Desktop
&nbsp;&nbsp;&nbsp;
<input type="radio" name="comp" value="L">Laptop
<br><br>
Do you need to work on the go?(pefer smartphones?)
<br>
<input type="radio" name="mobile" value="Y">Yes
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="mobile" value="N">No
<br><br>
Do you need to backup large amounts of data?
<br>
<input type="radio" name="port" value="Y">Yes
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="port" value="N">No
<br><br>
Which type of printer do you prefer?
<br>
<input type="radio" name="print" value="I">Inkjet
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="print" value="L">Laser
<br><br><br><br>
<input type="submit" name="next" value="Next step" onclick="f()">
&nbsp;&nbsp;
<input type="submit" name="skip" value="Skip this step">
&nbsp;&nbsp;
<input type="submit" name="back" value="Back">

</center>

</form>
</div>
</td>
</tr>
</table>
</center>

</body>
</html>

<?php 
if(isset($_POST["next"])||isset($_POST["skip"]))
{
	
	$userid=$_SESSION[userid];

	$comp=stripslashes(trim($_POST['comp']));
	$phone=stripslashes(trim($_POST['mobile']));
	$store=stripslashes(trim($_POST['port']));
	$print=stripslashes(trim($_POST['print']));
	
	$con=mysql_connect("localhost","root","");
    if(! $con)
    die("couldn't connect to database");
    mysql_select_db("shop",$con) or die ("cannot select db");	
	
     $update_query="update customer set comp='".$comp."', smartphone='".$phone."', storage='".$store."', printer='".$print."'  where mail='".$_SESSION[userid]."'";
    mysql_query($update_query) or die(mysql_error());
      
    $_SESSION["complete_step3"]=1;
  	header('Location:register4.php');
}
if(isset($_POST['back']))
{
	header('Location:register2.php');
	
}
}
?>