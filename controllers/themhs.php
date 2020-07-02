<?php
require 'config/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();
$error = [];

$namhoc = $_POST['namhoc'];
$hocky = $_POST['hocky'];
$lop = $_POST['lop'];
$ten = $_POST['ten'];
$tuoi = $_POST['tuoi'];
$diachi = $_POST['diachi'];
$gioitinh = $_POST['gioitinh'];
$email = $_POST['email'];

$rows = mysqli_fetch_assoc($conn->query('select count(MaHocSinh) as SL from hocsinh'));
$a = (int)$rows['SL']+1;
$mhs='HS'.(string)$a;

$age = date_diff(date_create(), date_create($tuoi))->format('%Y');
$row=mysqli_fetch_assoc($conn->query('select * from hocsinh where HoTen like "'.$ten.'"'));

$sql="INSERT INTO `hocsinh`(`MaHocSinh`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`)
VALUES ('$mhs','$ten','$gioitinh','$tuoi','$diachi','$email')";
$conn->query($sql);
$sql = 'select mahocky from hocky where hocky="'.$hocky.'" and manam="'.$namhoc.'"';
$mahocky = $conn->query($sql);
$mhk=$mahocky->fetch_row()[0];
$mqt=$mhs.$mhk;
$sql="INSERT INTO `quatrinhhoc`(`MaQTHoc`, `MaHocSinh`, `MaLop`, `MaHocky`, `DiemTBHK`) VALUES ('$mqt','$mhs', '$lop','$mhk','')";
$conn->query($sql);
$sql='UPDATE `lop` SET `SiSo`=`SiSo`+1 WHERE MaLop = "'.$lop.'"';
$conn->query($sql);
?>
