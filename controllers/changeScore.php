<?php require './config/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();

$pSS =$_POST['pSS'];
$pS=$_POST['pS'];
$error=[];
$sql="UPDATE thongso set giatri='$pSS' where mathongso='DDM'";
if($conn->query($sql)==true){
    $error[]=array(
        "error"=>false,
        "message"=>"Cập nhật điểm đạt môn thành công"
    );
}else{
    $error[]=array(
        "error"=>true,
        "message"=>"Cập nhật điểm đạt môn thất bại $conn->error"
    );
}
$sql="UPDATE thongso set giatri='$pS' where mathongso='DD'";
if($conn->query($sql)==true){
    $error[]=array(
        "error"=>false,
        "message"=>"Cập nhật điểm đạt thành công"
    );
}else{
    $error[]=array(
        "error"=>true,
        "message"=>"Cập nhật điểm đạt thất bại $conn->error"
    );
}

echo json_encode($error);