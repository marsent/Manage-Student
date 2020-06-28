<?php
require './database/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();
$sql = "
select *
from lop 
";
$result = $conn->query($sql);
$list = array();
while ($rows = $result->fetch_assoc()) {
    $list[] = array(
        "MaLop" => $rows['MaLop'] ,
        "TenLop" => $rows['TenLop'], 
    );
}
$conn->close();
echo json_encode($list);
?>