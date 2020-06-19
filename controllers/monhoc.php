<?php require 'config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();
$sql = "select * from monhoc";
$result = $conn->query($sql);
$monhoc = array();
while ($rows = $result->fetch_assoc()) {
    $monhoc[] = array(
        "MaMonHoc" => $rows['MaMonHoc'] ,
        "TenMonHoc" => $rows['TenMonHoc']
    );
}
$conn->close();
echo json_encode($monhoc);

