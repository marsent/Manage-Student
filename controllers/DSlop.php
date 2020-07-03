<?php require 'config/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();
$namhoc=$_POST['namhoc'];

$result = $conn->query("SELECT DISTINCT lop.*
FROM lop JOIN khoilop ON lop.MaKhoiLop=khoilop.MaKhoiLop
WHERE khoilop.MaNam='".$namhoc."'");

$SSTD=mysqli_fetch_assoc($conn->query('select GiaTri from thongso where MaThongSo like "SSTD"'))['GiaTri'];
$lop = array();

while ($rows = $result->fetch_assoc()) {
    $lop[] = array(
        "MaLop" => $rows['MaLop'] ,
        "TenLop" => $rows['TenLop'], 
        "MaKhoiLop"=>$rows['MaKhoiLop'],
        "SiSo"=>$rows['SiSo'],
        "SSTD"=> $SSTD
    );
}
$conn->close();
echo json_encode($lop);

