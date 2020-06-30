<?php
require './config/databaseController.php';
$mhs=$_POST['MSHS'];
$name=$_POST['Name'];
$gender=$_POST['Gender'];
$date=$_POST['Date'];
$address=$_POST['Address'];
$email=$_POST['Email'];


$db = new DataAccessHelper();
$conn=$db->connect();

$sql="INSERT INTO `hocsinh`(`MaHocSinh`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`)
VALUES ('$mhs','$name','$gender','$date','$address','$email')";
$report=$db->executeNonQuery($sql);
if($db->executeNonQuery($sql) == TRUE) {
  $report[]=array(
    'message' => true, 
    'error'=>''
  );
//   $mlop=$_POST['Class'];
//   $mhk=$rows['MaHocky'];
//   $mqth=$mhs.$mlop.$mhk;
//   $sql="INSERT INTO `quatrinhhoc`(`MaQTHoc`, `MaHocSinh`, `MaLop`, `MaHocKy`, `DiemTBHK`)
// VALUES ('$mqth'.'$mhs','$mlop','$mhk','')";
}
else{
  $report[]=array(
    'message' => false, 
    'error' => $db->executeNonQuery($sql)
  );
}
$conn->close();
echo json_encode ( $report ) ;
// $sql_2="SELECT MaHocKy
// FROM hocky join namhoc hocky.MaNamHoc=namhoc.Manamhoc
// where (NamHoc='$namhoc'
// and Hocky like '$hocky')
// ";
// $result = $conn->query($sql_2);
// $rows = $result->fetch_assoc();
?>
