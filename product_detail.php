<?php require_once('Connections/connect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
$colname_showproduct ="-1";
if(isset($_GET['p_id'])){
	$colname_showproduct = $_GET['p_id'];
}
mysql_select_db($database_connect, $connect);
$query_showproduct = sprintf("SELECT * FROM tbl_product WHERE p_id = %s" , GetSQLValueString($colname_showproduct,"int"));
$showproduct = mysql_query($query_showproduct, $connect) or die(mysql_error());
$row_showproduct = mysql_fetch_assoc($showproduct);
$totalRows_showproduct = mysql_num_rows($showproduct);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>devbanban.com</title>
    <?php include('bootstrap_h.php');?>

  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
         <?php include('condb.php');?>
        <?php include('menu.php');?>

      </div> <!-- close col-->
    </div> <!-- close row-->
</div>    <!-- close container-->



<!-- start show product detail -->
<div class="container">
  <div class="row" align="center">
  <h3 align="center"> แสดงรายละเอียดสินค้า </h3>
    <div class="col-xs-12 col-sm-4 col-md-3">
      <!-- show product img -->
    <img src="img/<?php echo $row_showproduct['p_img']; ?>"> </div>
    
    <div class="col-xs-12 col-sm-8 col-md-9">
    ชื่อสินค้า : <?php echo $row_showproduct['p_name']; ?>
    ราคา : <?php echo $row_showproduct['p_price']; ?> บาท <br/>
    
    <?php echo "<a href='cart.php?p_id=$row_showproduct[p_id]&act=add'><span class='glyphicon glyphicon-shopping-cart'> </span> เพิ่มลงตะกร้าสินค้า </a>"; ?>
    
    รายละเอียด : <?php echo $row_showproduct['p_detail']; ?> <br/>
    
    
      <!-- show product detail -->
    </div>

    
  </div>
</div>
<!-- end show product detail -->


<!-- start footer-->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <?php include('footer.php');?>
    </div>
  </div>
</div>
<!-- end footer-->

<?php include('script.php');?>
<?php
mysql_free_result($showproduct);
?>
</body>
</html>