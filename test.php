<?php
 require("data_access_helper.php");

 $db= new DataAccessHelper();

 $conn=$db->connect();

$sql = "SELECT `lable`, `data` FROM `data1`";


$result=$db->executeQuery($sql);
$conn->close();
$data=array();

foreach ($result as $row) {
	$data[]=$row;
}

echo json_encode($data);
?>
