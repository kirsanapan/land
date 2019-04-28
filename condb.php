<?php 
$con = mysqli_connect("localhost","root","12345678","proland");
mysqli_query($con, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');
if(mysqli_connect_errno())
{
	echo mysqli_connect_error();
}

?>
