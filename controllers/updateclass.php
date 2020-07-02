<?php require './config/databaseController.php';
$db = new DataAccessHelper();
$conn = $db->connect();


if (isset($_POST["malop"]) && isset($_POST["tenlop"])) {
    echo "<script>alert('Tue');</script>";
    $malop = $_POST["malop"];
    $tenlop = $_POST["tenlop"];
    $sql_update = "UPDATE lop SET TenLop='$tenlop' WHERE MaLop='$malop'";
    $result = mysqli_query($conn, $sql_update);
    if ($result) {
	    echo "<script> alert('Sửa thành công')</script>";
    } else {
        echo "<script>alert('Sửa không thành công')</script>";
    }
}else{
    echo "<script>alert('false');</script>";
    echo "Fail";
}
echo json_encode($result);

