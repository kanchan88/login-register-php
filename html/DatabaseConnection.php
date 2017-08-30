<?php

function dbc($host,$un,$pw,$db)
{

	$con = mysqli_connect($host,$un,$pw);
	if($con)
		{
	mysqli_select_db($con,$db);
		}
		else
		{
			echo "error in your database";
			exit;
		}
	return $con;
}

?>