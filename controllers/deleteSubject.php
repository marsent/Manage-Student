<?php require 'config/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();

$mamonhoc=$_POST['mamonhoc'];
$error=[];
$sql="DELETE from monhoc where mamonhoc='$mamonhoc'";
if($conn->query($sql)==true){
    $error[]=array(
        "error"=>false,
        "message"=>"Xóa môn học thành công"
    );
}else{
    $error[]=array(
        "error"=>false,
        "message"=>"Xóa môn học thất bại $conn->error"
    );
}
echo json_encode($error);