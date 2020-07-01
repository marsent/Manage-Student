<?php require 'config/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();
$namhoc=$_POST['namhoc'];
$hocky=$_POST['hocky'];
$sql = "SELECT DISTINCT lop.*
from quatrinhhoc join lop
on quatrinhhoc.malop=lop.malop
join hocky on hocky.mahocky=quatrinhhoc.mahocky
where hocky='$hocky' and manam='$namhoc'";

$result = $conn->query($sql);
$lop = array();
while ($rows = $result->fetch_assoc()) {
    $lop[] = array(
        "MaLop" => $rows['MaLop'] ,
        "TenLop" => $rows['TenLop'], 
        "MaKhoiLop"=>$rows['MaKhoiLop'],
        "SiSo"=>$rows['SiSo']
    );
}
$conn->close();
echo json_encode($lop);

