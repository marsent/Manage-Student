<?php require 'config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();
$sql = "select * from lop";
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

