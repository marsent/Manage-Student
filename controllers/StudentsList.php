<?php
require 'config/databaseController.php';

$class=$_POST['Class'];

<<<<<<< HEAD
$db = new DataAccessHelper();
$conn = $db->connect();
$sql = "
=======
$conn = new DataAccessHelper();
$conn = $conn->connect();
$sql ='
>>>>>>> b92396f32b5f24be7fdd2eef14476b07fc0fc2ff
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
