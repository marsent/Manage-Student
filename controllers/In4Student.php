<?php
require 'config/databaseController.php';
$id = $_POST['id'];
// $id='HS00018';
$conn = new DataAccessHelper();
$conn = $conn->connect();
$sql ='SELECT * 
FROM hocsinh JOIN quatrinhhoc on hocsinh.MaHocSinh=quatrinhhoc.MaHocSinh
JOIN lop on lop.MaLop=quatrinhhoc.MaLop
join hocky on hocky.MaHocKy=quatrinhhoc.MaHocKy
JOIN namhoc on namhoc.MaNam=hocky.MaNam
WHERE hocsinh.MaHocSinh = "'.$id.'"';

$result = $conn->query($sql);
$list = array();
while ($rows = $result->fetch_assoc()) {
    $list[] = array(
        "MaHs" => $rows['MaHocSinh'] ,
        "TenHs" => $rows['HoTen'], 
        "GT"=>$rows['GioiTinh'],
        "DC"=>$rows['DiaChi'],
        "NS"=>$rows['NgaySinh'],
        "Diem"=>$rows['DiemTBHK'],
        "Email"=>$rows['Email'],
        "Lop"=>$rows['TenLop'],
        "HK"=>$rows['HocKy'],
        "NH"=>$rows['NamHoc'],
    );    
}
$conn->close();
echo json_encode($list);
?>