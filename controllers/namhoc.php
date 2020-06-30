<?php require 'config/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();
$sql = "SELECT * from namhoc";
$result = $conn->query($sql);
$namhoc = array();
while ($rows = $result->fetch_assoc()) {
    $namhoc[] = array(
        "MaNam" => $rows['MaNam'],
        "NamHoc" => $rows['NamHoc']
    );
}

function printNamhoc($namhoc)
{
    foreach ($namhoc as $value) {
        echo " <option value=" . $value['MaNam'] . ">" . $value['NamHoc'] . "</option>";
    }
}
$conn->close();
echo json_encode($namhoc);
