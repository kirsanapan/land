<?php include('template/admin_header.php');?>

<body id="page-top">

  <?php include('template/admin_menu.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">ระบบขายน้ำดื่ม</a>
          </li>
          <li class="breadcrumb-item">จัดการสินค้า</li>
          <li class="breadcrumb-item active"><i class="fas fa-minus-square"></i> ลบสินค้า</li>
        </ol>

        <!-- Page Content -->
       <div class="container">
       <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col" width="120px">ลำดับ</th>
              <th scope="col" width="800px">ชื่อประเภทสินค้า</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td><a href="" class="btn btn-danger btn-block"><i class="fas fa-minus-square"></i> ลบสินค้า</a></td>
            </tr>
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
