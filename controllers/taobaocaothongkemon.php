<?php require './config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();
$error = [];

$namhoc = $_POST['namhoc'];
$hocky = $_POST['hocky'];
$lop = $_POST['lop'];
$monhoc = $_POST['monhoc'];

$sql = "SELECT mahocky from hocky where hocky='$hocky' and manam='$namhoc'";
$mahocky = $conn->query($sql);
$mhk = $mahocky->fetch_row()[0];
$sql = "SELECT * from 
baocaothongkemon join monhoc 
on baocaothongkemon.mamonhoc=monhoc.mamonhoc
join hocky on hocky.mahocky=baocaothongkemon.mahocky
where hocky.mahocky='$mhk' and monhoc.mamonhoc='$monhoc'";
$numrows = $conn->query($sql);
echo $numrows->num_rows;
if ($numrows->num_rows == 0) {
    $sql = "insert into baocaothongkemon (mabctkm,mamonhoc,mahocky) values ('" . $monhoc . $mhk . "','$monhoc','$mhk')";
    $conn->query($sql);
}
$conn->close();