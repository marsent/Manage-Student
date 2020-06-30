<?php require './config/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();

$minAge =$_POST['minAge'];
$maxAge=$_POST['maxAge'];
$error=[];
$sql="UPDATE thongso set giatri='$minAge' where mathongso='TTT'";
if($conn->query($sql)==true){
    $error[]=array(
        "error"=>false,
        "message"=>"Cập nhật tuổi tối thiểu thành công"
    );
}else{
    $error[]=array(
        "error"=>true,
        "message"=>"Cập nhật tuổi tối thiểu thất bại $conn->error"
    );
}
$sql="UPDATE thongso set giatri='$maxAge' where mathongso='TTD'";
if($conn->query($sql)==true){
    $error[]=array(
        "error"=>false,
        "message"=>"Cập nhật tuổi tối đa thành công"
    );
}else{
    $error[]=array(
        "error"=>true,
        "message"=>"Cập nhật tuổi tối đa thất bại $conn->error"
    );
}

echo json_encode($error);
