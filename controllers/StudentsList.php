<?php
require './database/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();
$sql = "
select *
from hocsinh 
";
$result = $conn->query($sql);
$list = array();
while ($rows = $result->fetch_assoc()) {
    $list[] = array(
        "MaHs" => $rows['MaHocSinh'] ,
        "TenHs" => $rows['HoTen'], 
    );
}
$conn->close();
echo json_encode($list);
?>
