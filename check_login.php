<?php
	session_start();
	include('condb.php');

	$ccon = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($con,$_POST['txtUsername'])."' 
	and Password = '".mysqli_real_escape_string($con,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($con,$ccon);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				header("location:products_add.php");
			}
			else
			{
				header("location:home_home.php");
			}
	}
	mysqli_close($con);
?>