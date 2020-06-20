<?php require 'config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();

$diem=$_POST['diem'];
$mabangdiem=$_POST['mabangdiem'];
$loaihinh=$_POST['loaihinh'];

$sql="INSERT INTO ct_bangdiemmon(MaBangDiemMon,MaLHKT,Diem) VALUES('$mabangdiem','$loaihinh','$diem')";

$message=[];
if($conn->query($sql)==true){
    $message=[
        "success"
    ];
}
else{
    $message=[
        $conn->error
    ];
}

echo json_encode($message);
