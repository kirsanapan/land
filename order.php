<!DOCTYPE html>
<?php include('bar.php');?>
<body>

<?php include('menu.php');?>

<div class="container-fluid">
 <h2>รายการสินค้า</h2>
  <p></p>
  
  
  
  <form name = "add member" action="admin_sql_add.php" method="POST" class="form-horizontal">
 <div class="container">
        	<div class="container">
        	<div class="row justify-content-md-center">
            <div class="col-sm-20">
            <form>
                <div class="container">
  <h2>รายการสินค้า</h2>
  

  <p></p>
           
  <table width="88%" class="table table-bordered">
  
    <thead>
      <tr>
        
        <th>สินค้า</th>
        <th>รายละเอียด</th>
        <th>ราคา</th>
        <th>สั่งซื้อ</th>
       
        
        </tr>   
    </thead>
    <tbody>
      <?php include('condb.php');
                        
                        $sql = "SELECT * FROM tbl_product";
                        $result = mysqli_query($con, $sql) or die ("Error in query:                         $sql " . mysqli_error());
                        while ($temp = mysqli_fetch_array($result)) {
                            ?>
                            <tr>

                               <td><img src="img/<?php echo $temp['p_img']; ?>" width="100"></td>
                                <td><?php echo $temp['p_detail'] ?></td>
                                <td><?php echo $temp['p_price'] ?></td>
                                
                                
                               <td><a href="cart.php?p_id=<?php echo $temp['p_id'] ?>&act=add" class="btn btn-success">สั่งซื้อ</a></td>

                                
                                
                            
                            <?php
						}
                        ?>
    </tbody>
					</table>
  
  
  
  
  
  
  

</div>


</body>
</html>

