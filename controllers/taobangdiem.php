<?php require './config/databaseController.php';
 require './config/function.php';
$db = new DataAccessHelper();
$conn = $db->connect();
$error = [];

$namhoc = $_POST['namhoc'];
$hocky = $_POST['hocky'];
$lop =$_POST['lop'];
$monhoc =$_POST['monhoc'];
$mahocky=getMaHK($conn,$hocky,$namhoc);
$sql = "SELECT * from quatrinhhoc join hocky
on quatrinhhoc.mahocky=hocky.mahocky
join bangdiemmon on bangdiemmon.maqthoc=quatrinhhoc.maqthoc
where  malop='$lop' and hocky='$hocky' and manam='$namhoc' and mamonhoc='$monhoc' and mamonhoc is null";
$result=$conn->query($sql);
if($result->num_rows!=0){
    foreach($result as $value){
        $maQTH = $value['MaQTHoc'];
        $maHS = $value['MaHocSinh'];
        $sql = "INSERT INTO bangdiemmon (MaBangDiemMon,MaQTHoc,MaMonHoc) VALUES('" . $maQTH . $monhoc . "','$maQTH','$monhoc')";
        $conn->query($sql);
    }
}

$sql = "SELECT * from quatrinhhoc join hocsinh
on quatrinhhoc.mahocsinh=hocsinh.mahocsinh
join bangdiemmon on bangdiemmon.maqthoc=quatrinhhoc.maqthoc
where  malop='$lop' and mahocky='$mahocky' and mamonhoc='$monhoc'";

 $result = $conn->query($sql);
 if ($result->num_rows == 0) {
     $sql = "SELECT * FROM quatrinhhoc join hocky
 on quatrinhhoc.mahocky=hocky.mahocky WHERE MaLop='$lop' AND MaNam='$namhoc' and hocky='$hocky'";
    $quatrinhhoc = $conn->query($sql);
    // Tạo bảng điểm môn 
    foreach ($quatrinhhoc as $value) {
        $maQTH = $value['MaQTHoc'];
        $maHS = $value['MaHocSinh'];
        $sql = "INSERT INTO bangdiemmon (MaBangDiemMon,MaQTHoc,MaMonHoc) VALUES('" . $maQTH . $monhoc . "','$maQTH','$monhoc')";
     
         $conn->query($sql);
    }

    $error[] = array(
        "error" => false,
        "message" => "Tạo bảng điểm mới thành công"
    );
} else {
    $error[] = array(
        "error" => true,
        "message" => "Bảng điểm đã tồn tại vui lòng nhập lại điểm cho học sinh"
    );
 }

$sql="SELECT quatrinhhoc.* from quatrinhhoc left JOIN bangdiemmon on quatrinhhoc.MaQTHoc=bangdiemmon.MaQTHoc WHERE mahocky='$mahocky' and malop='$lop' and mabangdiemmon is null";
$result=$conn->query($sql);
if($result->num_rows!=0){
    foreach($result as $value){
        $maQTH =$value['MaQTHoc'];
        $maHS = $value['MaHocSinh'];
        $sql = "INSERT INTO bangdiemmon (MaBangDiemMon,MaQTHoc,MaMonHoc) VALUES('" . $maQTH . $monhoc . "','$maQTH','$monhoc')";
        $conn->query($sql);
    }
}
echo json_encode($error);
$conn->close();
