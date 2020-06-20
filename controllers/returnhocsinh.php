<?php require 'config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();
$sql = "select * from hocsinh";
$result = $conn->query($sql);
$hocsinh = array();
while ($rows = $result->fetch_assoc()) {
    $hocsinh[] = array(
        "MaHocSinh" => $rows['MaHocSinh'] ,
        "HoTen" => $rows['HoTen'], 
        "GioiTinh"=>$rows['GioiTinh'],
        "NgaySinh"=>$rows['NgaySinh'],
        "DiaChi"=>$rows['DiaChi'],
        "Email"=>$rows['Email']
    );
}
$conn->close();
echo json_encode($hocsinh);

