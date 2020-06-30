<?php
require './config/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();
$sql = "
select *
from lop 
";
$result = $conn->query($sql);
$class = array();
while ($rows = $result->fetch_assoc()) {
    $class[] = array(
        "MaLop" => $rows['MaLop'] ,
        "TenLop" => $rows['TenLop'], 
    );
}
$conn->close();
echo json_encode($class);
?>