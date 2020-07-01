<?php
require 'config/databaseController.php';
$mhs=$_POST['MSHS'];
// $name=$_POST['Name'];
// $gender=$_POST['Gender'];
// $date=$_POST['Date'];
$address=$_POST['Address'];
$email=$_POST['Email'];
// $class=$_POST['Class'];
$conn = new DataAccessHelper();
$conn = $conn->connect();
if($address!=''){
    $conn->query('UPDATE `hocsinh` SET `DiaChi`="'.$address.'" WHERE MaHocSinh LIKE "'.$mhs.'"');
}
if($email!=''){
    $conn->query('UPDATE `hocsinh` SET `Email`="'.$email.'" WHERE MaHocSinh LIKE "'.$mhs.'"');
}
$conn->close();
?>