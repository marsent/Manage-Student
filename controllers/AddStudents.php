<<<<<<< HEAD
<?php
require 'config/databaseController.php';
// $mhs=$_POST['MSHS'];
$name=$_POST['Name'];
$gender=$_POST['Gender'];
$date=$_POST['Date'];
$address=$_POST['Address'];
$email=$_POST['Email'];
$class=$_POST['Class'];

$db = new DataAccessHelper();
$conn=$db->connect();

$age = date_diff(date_create(), date_create($date))->format('%Y');
$row=mysqli_fetch_assoc($conn->query('select * from hocsinh where HoTen like "'.$name.'"'));
$report='';

if(
  $age > mysqli_fetch_assoc($conn->query('select * from thongso where MaThongSo like "MAxY"'))['GiaTri'] ||
  $age < mysqli_fetch_assoc($conn->query('select * from thongso where MaThongSo like "MINY"'))['GiaTri'] ||
  ( $row['GioiTinh'] == $gender &&
    $row['NgaySinh'] == $date &&
    $row['DiaChi'] == $address &&
    $row['Email'] == $email)
){
  $report = false;
}
else {
$rows = mysqli_fetch_assoc($conn->query('select count(MaHocSinh) as SL from hocsinh'));
$a = (int)$rows['SL']+1;
$a+=1;
$mhs='';
if($a>0 && $a<10){$mhs='HS0000'.(string)$a;}
elseif($a>=10 && $a<100){$mhs='HS000'.(string)$a;}
elseif($a>=100 && $a<1000){$mhs='HS00'.(string)$a;}
elseif($a>=1000 && $a<10000){$mhs='HS0'.(string)$a;}
else {$mhs='HS'.(string)$a;}
//echo $mhs;
$sql='select *
from ((lop 
  INNER join khoilop on khoilop.MaKhoiLop=lop.MaKhoiLop)
  INNER join hocky on hocky.MaNam=khoilop.MaNam)
WHERE lop.MaLop like "'.$class.'"
ORDER BY MaHocKy DESC LIMIT 1
';
$result = $conn->query($sql);
$rows = mysqli_fetch_assoc($result);
$mhk = $rows['MaHocKy'];
$ml = $rows['MaLop'];
$mqt= $mhs.$rows['TenLop'].$mhk;
$sql="INSERT INTO `hocsinh`(`MaHocSinh`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`)
VALUES ('$mhs','$name','$gender','$date','$address','$email')";
if($db->executeNonQuery($sql) == TRUE) {
  $report = true;
  $conn->query("INSERT INTO `quatrinhhoc`(`MaQTHoc`, `MaHocSinh`, `MaLop`, `MaHocky`, `DiemTBHK`) VALUES ('$mqt','$mhs', '$ml','$mhk','')");
  $conn->query('UPDATE `lop` SET `SiSo`=`SiSo`+1 WHERE MaLop = "'.$ml.'"');
}
else{
  $report = false;
}
}
$conn->close();
echo json_encode ($report) ;
//date_default_timezone_set(‘Asia/Ho_Chi_Minh’);

// $date = '1998-01-30';
// $age = date_diff(date_create(), date_create($date))->format('%Y');

// echo $age;
?>
