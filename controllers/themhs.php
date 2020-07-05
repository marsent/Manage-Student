<?php
require 'config/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();
$error = [];

$namhoc = $_POST['namhoc'];
$lop = $_POST['lop'];
$ten = $_POST['ten'];
$tuoi = $_POST['tuoi'];
$diachi = $_POST['diachi'];
$gioitinh = $_POST['gioitinh'];
$email = $_POST['email'];
$age = date_diff(date_create(), date_create($tuoi))->format('%Y');
$DKT = ($age > mysqli_fetch_assoc($conn->query('select * from thongso where MaThongSo like "TTD"'))['GiaTri'] ||
        $age < mysqli_fetch_assoc($conn->query('select * from thongso where MaThongSo like "TTT"'))['GiaTri']);
if($DKT){
    $error[] = array(
      "error" => true,
      "message" => "Học sinh nằm ngoài độ tuổi tiếp nhận"
  );
  echo json_encode($error);
  goto end;
}
$row=mysqli_fetch_assoc($conn->query('select * from hocsinh where HoTen like "'.$ten.'"')); 
if($row !=Null){
  $DKT =($row['GioiTinh'] == $gioitinh&&
      $row['NgaySinh'] == $tuoi &&
      $row['DiaChi'] == $diachi &&
      $row['Email'] == $email);
  if($DKT){
    $error[] = array(
    "error" => true,
    "message" => "Học sinh đã tồn tại"
    );
    echo json_encode($error);
    goto end;
  }
}
    $rows = mysqli_fetch_assoc($conn->query('select count(MaHocSinh) as SL from hocsinh'));
    $a = (int)$rows['SL']+1;
    $mhs='HS'.(string)$a;

    $sql="INSERT INTO `hocsinh`(`MaHocSinh`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`)
    VALUES ('$mhs','$ten','$gioitinh','$tuoi','$diachi','$email')";
    $conn->query($sql);
    $sql = 'select * from hocky where manam="'.$namhoc.'"';
    $result = $conn->query($sql);
    while ($rows = $result->fetch_assoc()) {
      $mhk=$rows['MaHocKy'];
      $mqt=$mhs.$mhk;
      $sql="INSERT INTO `quatrinhhoc`(`MaQTHoc`, `MaHocSinh`, `MaLop`, `MaHocky`, `DiemTBHK`) VALUES ('$mqt','$mhs', '$lop','$mhk','')";
      $conn->query($sql);
      }
    $conn->query($sql);
    $error[] = array(
      "error" => true,
      "message" => "Thêm học sinh thành công"
);
echo json_encode($error);
end:$conn->close();
