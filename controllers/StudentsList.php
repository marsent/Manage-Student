<?php
require 'config/databaseController.php';
$class=$_POST['Class'];

$conn = new DataAccessHelper();
$conn = $conn->connect();
$sql ='
select *
from hocsinh join quatrinhhoc on hocsinh.MaHocSinh=quatrinhhoc.MaHocSinh
WHERE MaLop like "'.$class.'"
and MaHocky=(
    select MaHocKy
    WHERE MaLop like "'.$class.'"
    ORDER BY MaHocKy DESC LIMIT 1
)';

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
