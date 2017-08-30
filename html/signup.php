<?php
session_start();
if (!empty($_SESSION['key_un']))
{

}

if(isset($_POST['submit']))
{
include('DatabaseConnection.php');
$con = dbc("localhost","root","","fb");
$q = "INSERT INTO user"."(username,password)".
	"VALUES".
	"('$_POST[username]','$_POST[password]')";

$result=array(mysqli_query($con, $q));
$success=0;
while ($row = mysqli_fetch_array($result)) 
{
$username=$row['username'];
$password=$row['password'];
$_SESSION['key_un']=$username;
$success=1;
}
	if($success==1)
	{
	
		echo  "Welcome";
		echo $username;
	}
	else
	{
	echo " You are successfully logged in";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link href="../css/style.css" type="text/css" rel="stylesheet"/>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<style type="text/css">
#main
{
background-color:yellow;
}

</style>
</head>
<body>
	<div class="wrapper">
		<div class="row"><!----Gap----->
			<div class="col-md-4 col-xs-4">
			</div>
			
			<!----Sign up form---->
			<div class="col-md-3 col-xs-3">
			<div id="main">
			<form name="userreg" method="POST">
			<font face="New Times Roman" color="blue"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign Up</b> </font><br>
			<font face="Comic sans MS" color="red">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full Name:<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" placeholder="Enter your full name" required><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" placeholder="Enter secured pass" required><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email"/> <br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Of Birth: <br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date"/><br/><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Sign Up" name="submit"/><br/>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Already Regsitered?<a href="login.php">LogIn Here</a> 
			
			<br/><br/>
			</font>
			</form>
		</div> <!--div classcol-md-6 closed-->
		</div> <!--div id main closed-->
	</div>
</body>