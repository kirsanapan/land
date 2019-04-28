<?php include('template/admin_header.php');?>

<body id="page-top">

  <?php include('template/admin_menu.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">ระบบขายไก่ทอดออนไลน์</a>
          </li>
          <li class="breadcrumb-item">จัดการสินสมาชิก</li>
          <li class="breadcrumb-item active"><i class="fas fa-minus-square"></i> ลบสมาชิก</li>
        </ol>
<?php
                include('condb.php');
                $query = "SELECT * FROM member WHERE Status = 'USER' ORDER BY UserID ASC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);				
				
				?>
        <!-- Page Content -->
       <div class="container">
       <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">USER</th>
              <th scope="col">PASSWORD</th>
              <th scope="col">NAME</th>
              <th scope="col">EMAIL</th>
              <th scope="col">TEL</th>
              <th scope="col">LEVEL</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
           <?php
		  while($row = mysqli_fetch_array($result)) {
			  ?>
            <tr>
              <th scope="row"> <?php echo $row["UserID"]; ?> </th>
              <td> <?php echo $row["Username"]; ?> </td>
              <td><?php echo $row["Password"]; ?></td>
              <td><?php echo $row["Name"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["tel"]; ?></td>
              <td><?php echo $row["Status"]; ?></td>
              <td><?php echo $row["address"]; ?></td> 
              <td><a href="customer_del_db.php?ID=<?php echo $row['UserID'] ?>" class="btn btn-danger btn-block"><i class="fas fa-pen-square"></i> ลบสมาชิก</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
       </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
