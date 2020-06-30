<?php require './config/databaseController.php';
$db = new DataAccessHelper();
$conn = $db->connect();

$mamonhoc=$_POST['mamonhoc'];
$tenmonhoc=$_POST['tenmonhoc'];
$error=[];

$sql="UPDATE monhoc set tenmonhoc='$tenmonhoc' where mamonhoc='$mamonhoc'";
if($conn->query($sql)==true){
    $error[]=array(
        "error"=>false,
        "message"=>"Cập nhật môn học thành công"
    );
}else{
    $error[]=array(
        "error"=>false,
        "message"=>"Cập nhật môn học thất bại $conn->error"
    );
}

echo json_encode($error);