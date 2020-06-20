<?php require 'config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();

for ($i=1;$i<30;$i++){
    $sql="insert into quatrinhhoc(MaQTHoc,MaHocSinh,MaLop,MaHocKy) values('HS$i','Đào Tuấn Anh','Nam','2000/02/19','Kí túc xá khu B Đại học quốc gia thành phố Hồ chí minh','tuananh8423@gmail.com')";
    $conn->query($sql);
}

$conn->close();
echo json_encode($lop);

