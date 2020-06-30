<?php require './config/databaseController.php';
require './returntable.php';
$db = new DataAccessHelper();
$conn = $db->connect();

$mamonhoc = $_POST['mamonhoc'];
$tenmonhoc = $_POST['tenmonhoc'];
$heso = $_POST['heso'];
$khoi = $_POST['khoi'];
$namhoc = $_POST['namhoc'];
$bang = $_POST['bang'];
$error = [];
$mkl = "";
if ($khoi == "Khối 10") {
    $mkl = "K10";
} elseif ($khoi == "Khối 11") {
    $mkl = "K11";
} else {
    $mkl = "K12";
}
if (checkExits($monhoc, $mamonhoc) == true) {
    $sql = "INSERT into monhoc(mamonhoc,tenmonhoc) values('$mamonhoc','$tenmonhoc')";
    if ($conn->query($sql) == true) {

        $sql = "INSERT into chuongtrinhhoc(makhoilop,mamonhoc,heso) values('$mkl$namhoc','$mamonhoc','$heso')";
        if ($conn->query($sql) == true) {
            $error[] = array(
                "error" => false,
                "message" => "Thêm môn học mới thành công"
            );
        } else {
            $error[] = array(
                "error" => true,
                "message" => "Thêm môn học mới thất bại $conn->error"
            );
        }
    } else {
        $error[] = array(
            "error" => true,
            "message" => "Thêm môn học mới thất bại $conn->error"
        );
    }
}else{
    $error[] = array(
        "error" => true,
        "message" => "Thêm môn học mới thất bại: Môn học đã tồn tại trong cơ sở dữ liệu"
    );
}
echo json_encode($error);

function checkExits($arr, $mamonhoc)
{
    foreach ($arr as $value) {
        if ($mamonhoc == $value['MaMonHoc']) return false;
    }

    return true;
}
