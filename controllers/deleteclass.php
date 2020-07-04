
<?php require 'config/databaseController.php';
session_start();
$db = new DataAccessHelper();
$conn = $db->connect();

	if (isset($_POST["delete"])){
    $malop = $_POST["delete"];
    $countsql = "SELECT * FROM lop WHERE lop.SiSo = 0 AND lop.MaLop='$malop';";
    $countrs = mysqli_query($conn,$countsql);

    if ($countrs->num_rows > 0){
    $delsql = "DELETE FROM lop WHERE lop.malop='$malop';";
    $delresult = mysqli_query($conn,$delsql);
    header("location:../qllh.php");
    $_SESSION["thongbao"]="<script>alert('Xóa thành công')</script>";
    }else{
        header("location:../qllh.php");
        $_SESSION["thongbao"]="<script>alert('Không thể xóa lớp đang có học sinh')</script>";
    }
	}
