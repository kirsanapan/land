<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $c_user = $_REQUEST["username"];
  $c_pass = $_REQUEST["password"];
  $c_name = $_REQUEST["name"];
  $c_email = $_REQUEST["email"];
  $c_tel = $_REQUEST["tel"];
  $c_lvl = $_REQUEST["status"];
  $c_address = $_REQUEST["address"];
  //เพิ่มเข้าไปในฐานข้อมูล
  $sql = "INSERT INTO member(Username, Password, Name, email, tel,Status, address)
       VALUES('$c_user', '$c_pass', '$c_name', '$c_email', '$c_tel','$c_lvl', '$c_address')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  //ปิดการเชื่อมต่อ database
  mysqli_close($con);
  //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Register Succesfuly');";
  echo "window.location = 'customer_add.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}
?>