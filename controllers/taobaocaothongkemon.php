<?php require './config/databaseController.php';
    require './config/function.php';
    $db = new DataAccessHelper();
    $conn = $db->connect();
$error = [];

$namhoc = $_POST['namhoc'];
$hocky = $_POST['hocky'];
$lop = $_POST['lop'];
$monhoc = $_POST['monhoc'];

$mahocky=getMaHK($conn,$hocky,$namhoc);
$sql = "SELECT * from 
baocaothongkemon join monhoc 
on baocaothongkemon.mamonhoc=monhoc.mamonhoc
join hocky on hocky.mahocky=baocaothongkemon.mahocky
where hocky.mahocky='$mahocky' and monhoc.mamonhoc='$monhoc'";
$numrows = $conn->query($sql);
echo $numrows->num_rows;
if ($numrows->num_rows == 0) {
    $sql = "insert into baocaothongkemon (mabctkm,mamonhoc,mahocky) values ('" . $monhoc . $mahocky . "','$monhoc','$mahocky')";
    $conn->query($sql);
}
$conn->close();