<?php require './config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();
$error = [];

$namhoc = $_POST['namhoc'];
$hocky = $_POST['hocky'];
$lop = $_POST['lop'];
$monhoc = $_POST['monhoc'];

$sql = "select mahocky from hocky where hocky='$hocky' and manam='$namhoc'";
$mahocky = $conn->query($sql);
$mhk = $mahocky->fetch_row()[0];

$sql = "SELECT siso
    FROM quatrinhhoc JOIN hocky
    on quatrinhhoc.mahocky=hocky.mahocky 
    JOIN bangdiemmon on bangdiemmon.maqthoc=quatrinhhoc.maqthoc
    JOIN lop on lop.malop=quatrinhhoc.malop
     WHERE quatrinhhoc.MaLop='$lop' AND MaNam='$namhoc' and hocky='$hocky'";
$sisolop = $conn->query($sql);
$siso = $sisolop->fetch_row()[0];

$sql = "SELECT count(*) as soluongdat 
FROM quatrinhhoc 
 WHERE MaLop='$lop' AND mahocky='$mhk' and diemtbhk>=5";
$soluongdat = $conn->query($sql);
$sld =$soluongdat->fetch_row()[0];

$siso = (int) $siso;
$tile = ($sld / $siso) * 100;
$sql = "SELECT * FROM baocaotongkethocky 
where malop='$lop' and mahocky='$mhk' ";

 $checkexist = $conn->query($sql);
if ($checkexist->num_rows == 0) {
    $sql ="INSERT into baocaotongkethocky (mahocky,malop,soluongdat,tile) values('$mhk','$lop','$sld','$tile')";
    $conn->query($sql);
}
else{
    $sql="UPDATE baocaotongkethocky set soluongdat='$sld', tile='$tile' where mahocky='$mhk' and malop='$lop'";
    $conn->query($sql);
    echo $conn->error;
}
