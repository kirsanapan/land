
  <?php include('template/admin_header.php');?>


<body id="page-top">

 <?php include('template/admin_menu.php');?>
 
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">ระบบไก่ทอดออนไลน์</a>
          </li>
          <li class="breadcrumb-item">จัดการสินสมาชิก</li>
          <li class="breadcrumb-item active"><i class="fas fa-plus-square"></i> เพิ่มผู้ดูแล</li>
        </ol>
        
		<div class="container">
        	<div class="row justify-content-md-center">
            <div class="col-sm-8">
            <form name = "add member" action="customer_add_db.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="">USERNAME</label>
                    <input type="text" class="form-control" name="username" id="username" id="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">PASSWORD</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                </div>                
                <div class="form-group">
                    <label for="">EMAIL</label>
                    <input type="email" class="form-control"  name="email" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">TEL</label>
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">ADDRESS</label>
                    <textarea class="form-control"  name="address" id="address" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">LEVEL</label>
                    <select class="form-control" name="status" id="status">
                      <option value="ADMIN">แอดมิน</option>
                      <option value="USER">สมาชิก</option>
                    </select>
                 </div>
                <button type="submit" class="btn btn-success btn-block"><i class="fas fa-plus-square"></i> เพิ่มสมาชิก</button>
            </form>
            </div>
           </div>
		</div>
        
        
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          
        </div>
      </footer>

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
