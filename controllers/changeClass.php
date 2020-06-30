<?php require './config/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();

$numStudent=$_POST['numStudent'];
$numClass=$_POST['numClass'];
$state=$_POST['state'];
$error=[];
$sql="UPDATE thongso set giatri='$numStudent' where mathongso='SSTD'";
if($conn->query($sql)==true){
    $error[]=array(
        "error"=>false,
        "message"=>"Cập nhật sĩ số tối đa thành công thành công"
    );
}else{
    $error[]=array(
        "error"=>true,
        "message"=>"Cập nhật sĩ số tối đa thất bại $conn->error"
    );
}
$sql="UPDATE thongso set giatri='$numClass' where mathongso='$state'";
if($conn->query($sql)==true){
    $error[]=array(
        "error"=>false,
        "message"=>"Cập nhật số lớp tối đa thành công"
    );
}else{
    $error[]=array(
        "error"=>true,
        "message"=>"Cập nhật số lớp tối đa thất bại $conn->error"
    );
}

echo json_encode($error);
