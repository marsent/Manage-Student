<?php require './config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();
$error=[];

$namhoc=$_POST['namhoc'];
$hocky=$_POST['hocky'];
$lop=$_POST['lop'];
$monhoc=$_POST['monhoc'];

$sql="SELECT * FROM quatrinhhoc join hocky
on quatrinhhoc.mahocky=hocky.mahocky WHERE MaLop='$lop' AND MaNam='$namhoc' and hocky='$hocky'";
$quatrinhhoc= $conn->query($sql);


// Tạo bảng điểm môn
foreach($quatrinhhoc as $value){
    $maQTH=$value['MaQTHoc'];
    $maHS=$value['MaHocSinh'];
    $sql="INSERT INTO bangdiemmon (MaBangDiemMon,MaQTHoc,MaMonHoc) VALUES('".$maQTH.$monhoc."','$maQTH','$monhoc')";
    if($conn->query($sql)==true){
        $error[]=array(
            "error"=>false
        );
    }
    else{
        $error[]=array(
            "error"=>true,
            "message"=>$conn->error
        );
    }
}


echo json_encode($error);
