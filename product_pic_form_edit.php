<html>
<head>
<title>DOGNAN</title>
</head>
<body>
<?php
	
	include('condb.php');
	$p_id = $_REQUEST["ID"];
	$strSQL = "SELECT * FROM tbl_product WHERE  p_id='$p_id' ";
	$objQuery = mysqli_query($con,$strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysqli_fetch_array($objQuery);
?>
	<form name="form1" method="post" action="product_pic_edit_db.php" enctype="multipart/form-data">
	Edit Picture :<br>
    <input type="hidden" name="p_id" value="<?php echo $p_id; ?>">
	Name : <input type="text" name="txtName" value="<?php echo $objResult["p_name"];?>"><br>
	<img src="/proland/img//<?php echo $objResult["p_img"];?>"><br>
	Picture : <input type="file" name="filUpload"><br>
	<input type="hidden" name="p_img" value="<?php echo $objResult["p_img"];?>">
	<input name="btnSubmit" type="submit" value="Submit">
	</form>
</body>
</html>