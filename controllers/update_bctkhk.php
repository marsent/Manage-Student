<?php require './config/databaseController.php';
        require './config/function.php';
        $db = new DataAccessHelper();
        $conn = $db->connect();
$error = [];

$namhoc = $_POST['namhoc'];
$hocky = $_POST['hocky'];
$lop = $_POST['lop'];
$monhoc = $_POST['monhoc'];
$mahocky=getMaHK($conn,$hocky,$namhoc);
$diemdat=getDiemDat($conn);
$sql = "SELECT siso
    FROM quatrinhhoc 
    JOIN lop on lop.malop=quatrinhhoc.malop
     WHERE quatrinhhoc.MaLop='$lop' AND mahocky='$mahocky'";
$sisolop = $conn->query($sql);
$siso = $sisolop->fetch_row()[0];
 $sql = "SELECT count(*) as soluongdat 
 FROM quatrinhhoc 
  WHERE MaLop='$lop' AND mahocky='$mahocky' and diemtbhk>=$diemdat";
 $soluongdat = $conn->query($sql);
 $sld = $soluongdat->fetch_row()[0];
$siso = (int) $siso;
$tile = ($sld / $siso) * 100;
$sql = "SELECT * FROM baocaotongkethocky 
where malop='$lop' and mahocky='$mahocky' ";

$checkexist = $conn->query($sql);
if ($checkexist->num_rows == 0) {
    $sql = "INSERT into baocaotongkethocky (mahocky,malop,soluongdat,tile) values('$mahocky','$lop','$sld','$tile')";
    $conn->query($sql);
} else {
    $sql = "UPDATE baocaotongkethocky set soluongdat='$sld', tile='$tile' where mahocky='$mahocky' and malop='$lop'";
    $conn->query($sql);
}
