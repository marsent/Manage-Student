<?php  require './database/databaseController.php';

$conn=new DataAccessHelper();
$link=$conn->connect();
$mhs=$_POST['MSHS'];
$name=$_POST['Name'];
$gender=$_POST['Gender'];
$date=$_POST['Date'];
$address=$_POST['Address'];
$email=$_POST['Email'];

$sql="INSERT INTO `hocsinh`(`MaHocSinh`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`) VALUES ('$mhs','$name','$gender','$date','$address','$email')";
$conn->executeNonQuery($sql);
$conn->close();
