<?php
require 'config/databaseController.php';
$namhoc = $_POST['namhoc'];
$hocky = $_POST['hocky'];
$lop = $_POST['lop'];

$conn = new DataAccessHelper();
$conn = $conn->connect();
$sql ='select *
from hocsinh join quatrinhhoc on hocsinh.MaHocSinh=quatrinhhoc.MaHocSinh
WHERE quatrinhhoc.MaLop="'.$lop.'"  and quatrinhhoc.MaHocky=(
    select MaHocKy
    FROM hocky
    WHERE HocKy="'.$hocky.'" AND MaNam="'.$namhoc.'")
    ORDER BY hocsinh.HoTen ASC';

$result = $conn->query($sql);
$list = array();
while ($rows = $result->fetch_assoc()) {
    $list[] = array(
        "MaHs" => $rows['MaHocSinh'] ,
        "TenHs" => $rows['HoTen'], 
        "Diem"=>$rows['DiemTBHK'],
    );
}
echo json_encode($list);
$conn->close();
?>
