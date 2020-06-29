<?php require 'config/databaseController.php';
$mhs=$_POST['MSHS'];
$name=$_POST['Name'];
$gender=$_POST['Gender'];
$date=$_POST['Date'];
$address=$_POST['Address'];
$email=$_POST['Email'];
$class=$_POST['Class'];

$report=array();
$db = new DataAccessHelper();
$conn=$db->connect();

$sql1='select *
from ((lop 
  INNER join khoilop on khoilop.MaKhoiLop=lop.MaKhoiLop)
  INNER join hocky on hocky.MaNam=khoilop.MaNam)
WHERE lop.MaLop like "'.$class.'"
ORDER BY MaHocKy DESC LIMIT 1
';
$result1 = $conn->query($sql1);
$rows = mysqli_fetch_assoc($result1);
$mhk = $rows['MaHocKy'];
$ml = $rows['MaLop'];
$mqt= $mhs.$rows['TenLop'].$mhk;
$sql="INSERT INTO `hocsinh`(`MaHocSinh`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`)
VALUES ('$mhs','$name','$gender','$date','$address','$email')";
if($db->executeNonQuery($sql) == TRUE) {
  $report[]=array(
    'message' => true, 
    'error'=>''
  );
  
  $sql2="INSERT INTO `quatrinhhoc`(`MaQTHoc`, `MaHocSinh`, `MaLop`, `MaHocky`, `DiemTBHK`)
  VALUES ('$mqt','$mhs', '$ml','$mhk','')";
  $conn->query($sql2);
}
else{
  $report[]=array(
    'message' => false, 
    'error' => $db->executeNonQuery($sql)
  );
}
$conn->close();
echo json_encode ($report,JSON_OBJECT_AS_ARRAY) ;
?>
