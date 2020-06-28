<?php require 'config/databaseController.php';
$conn = new DataAccessHelper();
$conn = $conn->connect();
$namhoc = $_POST['namhoc'];
$hocky = $_POST['hocky'];
$lop = $_POST['lop'];
$monhoc = $_POST['monhoc'];
$hocsinh = array();
$sql = "SELECT *
FROM hocsinh JOIN quatrinhhoc
on hocsinh.mahocsinh=quatrinhhoc.mahocsinh
JOIN bangdiemmon on quatrinhhoc.maqthoc=bangdiemmon.maqthoc
JOIN hocky on hocky.mahocky=quatrinhhoc.mahocky
Where malop='$lop' AND mamonhoc='$monhoc' AND hocky='$hocky' AND manam='$namhoc'";
$result = $conn->query($sql);
foreach ($result as $rows) {
    $hocsinh[] = array(
        "MaHocSinh" => $rows['MaHocSinh'],
        "HoTen" => $rows['HoTen'],
        "GioiTinh" => $rows['GioiTinh'],
        "NgaySinh" => $rows['NgaySinh'],
        "DiaChi" => $rows['DiaChi'],
        "Email" => $rows['Email'],
        "kt15p1" => $rows['KiemTra15pl1'],
        "kt15p2" => $rows['KiemTra15pl2'],
        "kt15p3" => $rows['KiemTra15pl3'],
        "kt1t1" => $rows['KiemTra1tl1'],
        "kt1t2" => $rows['KiemTra1tl2'],
        "THK" => $rows['ThiHocKy'],
        "DTB" => round($rows['DiemTBMon'], 3)
    );
}
$conn->close();
echo json_encode($hocsinh);
