<?php require 'config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();
$sql = "select * from namhoc";
$result = $conn->query($sql);
$namhoc = array();
while ($rows = $result->fetch_assoc()) {
    $namhoc[] = array(
        "MaNam" => $rows['MaNam'] ,
        "NamHoc" => $rows['NamHoc']
    );
}
$conn->close();
echo json_encode($namhoc);