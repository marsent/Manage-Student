<?php require 'config/databaseController.php';
        require './config/function.php';

        $db = new DataAccessHelper();
        $conn = $db->connect();
$namhoc = $_POST['namhoc'];
$hocky = $_POST['hocky'];
$lop = $_POST['lop'];
$monhoc = $_POST['monhoc'];
$diemquamon=getDiemQuaMon($conn);


$sql = "SELECT count(*) as soluongdat 
FROM quatrinhhoc JOIN hocky
 on quatrinhhoc.mahocky=hocky.mahocky 
 JOIN bangdiemmon on bangdiemmon.maqthoc=quatrinhhoc.maqthoc 
 WHERE MaLop='$lop' AND MaNam='$namhoc' and hocky='$hocky' and diemtbmon>='$diemquamon' and mamonhoc='$monhoc'";
$soluongdat = $conn->query($sql);
$sld = 0;
foreach ($soluongdat as $value) {
    $sld = $value['soluongdat'];
}

$sql = "SELECT siso
    FROM quatrinhhoc JOIN hocky
    on quatrinhhoc.mahocky=hocky.mahocky 
    JOIN bangdiemmon on bangdiemmon.maqthoc=quatrinhhoc.maqthoc
    JOIN lop on lop.malop=quatrinhhoc.malop
     WHERE quatrinhhoc.MaLop='$lop' AND MaNam='$namhoc' and hocky='$hocky'";
$sisolop = $conn->query($sql);
$siso = 0;
foreach ($sisolop as $value) {
    $siso = $value['siso'];
}
$mahocky=getMaHK($conn,$hocky,$namhoc);
$siso = (int) $siso;
$tile = ($sld / $siso) * 100;

$sql = "SELECT * FROM ct_bctkm JOIN baocaothongkemon
on ct_bctkm.mabctkm=baocaothongkemon.mabctkm
where malop='$lop' and mahocky='$mahocky' and mamonhoc='$monhoc'";

$checkexist = $conn->query($sql);
if ($checkexist->num_rows == 0) {
    $sql = "INSERT into ct_bctkm(mabctkm,malop,soluongdat,tile) values('" . $monhoc . $mahocky . "','$lop','$sld','$tile')";
    $conn->query($sql);
} else {
    $sql = "UPDATE ct_bctkm SET soluongdat = '$sld',tile = '$tile' WHERE mabctkm = '" . $monhoc . $mahocky . "'AND malop = '$lop'";
    $conn->query($sql);
}

