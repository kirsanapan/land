<?php
    session_start();
    include("condb.php");
    require_once __DIR__ . '/vendor/autoload.php';
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $date = date("Y-m-d H:i:s");

ob_start();
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
</head>
<body>
<h1 style="text-align:center">ใบเสร็จ</h1>
<div style="text-align:center">SA Online</div>
ชื่อ : <?php echo $name?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date?>
<hr>
<table class="table table-bordered" width="100%" bordercolor="#424242" border="1" align="center" cellpadding="5" cellspacing="0">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ชื่อสินค้า</th>
      <th scope="col">จำนวน</th>
      <th scope="col">ราคา</th>
      <th scope="col">รวม/รายการ</th>
    </tr>
  </thead>
  <tbody>
   
    <?php 
    foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
	{
		$sql = "select * from tbl_product where p_id=$p_id";
		$query = mysqli_query($con, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['p_price']*$p_qty;
        $total	+= $sum;
        $i = 0;
    echo "<tr>";
	echo "<td align='center'>";
	echo  $i += 1;
	echo "</td>";
    echo "<td>" . $row["p_name"] . "</td>";
    echo "<td align='right'>" .number_format($row['p_price'],2) ."</td>";
    echo "<td align='right'>$p_qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='right' colspan='4'><b>รวม</b></td>";
    echo "<td align='right'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";
?>
    ?>
    
  </tbody>
</table>
<hr>
</body>
</html>

<?Php
$html = ob_get_contents();
ob_end_clean();
$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 10,
    'default_font' => 'Garuda',
    'format' => [100, 150]
]);   
$mpdf->WriteHTML($html, 2);
$mpdf->Output();
?>     