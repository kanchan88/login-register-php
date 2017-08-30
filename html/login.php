<?php
session_start();
if (!empty($_SESSION['key_un']))
{
	
}

if(isset($_POST['submit']))
{
include('DatabaseConnection.php');
$con = dbc("localhost","root","","fb");
$q = "SELECT * from user where username='".($_POST['username'])."' and password='".($_POST['password'])."'";

$result=mysqli_query($con, $q);
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
		echo "Sorry";
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In</title>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<style type="text/css">
</style>
</head>
<body>
<form name="userreg" method="POST">
Name:<input type="text" name="username" />
Password: <input type="password" name="password"/>
<input type="submit" value="log in" name="submit"/>
</form>
</body>
</html>