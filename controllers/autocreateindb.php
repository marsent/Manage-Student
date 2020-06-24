<?php require 'config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();

// tự tạo qth
/*$sql = "select * from hocsinh";
$result = $conn->query($sql);

$numrows= mysqli_num_rows($result);

for($i=0;$i<$numrows;$i++){
    while($rows=$result->fetch_assoc()){
        $a=$rows['MaHocSinh'];
    $sql="INSERT INTO quatrinhhoc (MaQTHoc,MaHocSinh,MaLop,MaHocKy) VALUES ('".$a."10A1N1516','$a','10A1N1516','HK1N1920')";
     $conn->query($sql);
}
} */

$sql = "SELECT * FROM monhoc";
$monhoc = $conn->query($sql);
$slmh = mysqli_num_rows($monhoc);
$sql = "SELECT * FROM quatrinhhoc";
$qth = $conn->query($sql);
$slqth = mysqli_num_rows($qth);
$i = 0;
while ($rowsmh = $monhoc->fetch_assoc()) {
    $a = $rowsmh['MaMonHoc'];
    while ($rowsqth = $qth->fetch_assoc()) {
        $b = $rowsqth['MaHocSinh'];
        $c = $rowsqth['MaQTHoc'];
        $sql = "INSERT INTO bangdiemmon (MaBangDiemMon,MaQTHoc,MaMonHoc) VALUES('$a$b','$c','$a')";
        $conn->query($sql);
    }
}
