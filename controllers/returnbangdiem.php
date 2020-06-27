<?php require 'config/databaseController.php';
    $conn = new DataAccessHelper();
    $conn = $conn->connect();
    $namhoc = $_POST['namhoc'];
    $hocky = $_POST['hocky'];
    $lop = $_POST['lop'];
    $monhoc = $_POST['monhoc'];
    $hocsinh = array();
    $sql = "select *
from hocsinh join quatrinhhoc
on hocsinh.mahocsinh=quatrinhhoc.mahocsinh
join bangdiemmon
on quatrinhhoc.maqthoc=bangdiemmon.maqthoc
join hocky 
on hocky.mahocky=quatrinhhoc.mahocky
where malop='$lop' and mamonhoc='$monhoc' and hocky='$hocky' and manam='$namhoc'";
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
            "DTB" => round($rows['DiemTBMon'],3)
        );
    }
    $conn->close();
    echo json_encode($hocsinh);

