<?php require './config/databaseController.php';
$db = new DataAccessHelper();
$conn = $db->connect();
session_start();

if (isset($_POST["malop"]) && isset($_POST["tenlop"])) {
    $malop = $_POST["malop"];
    $tenlop = $_POST["tenlop"];
    
    
    $malop_sosanh1=substr($malop, 0, 2);
    $tenlop_sosanh1=substr($tenlop, 0, 2);
    if($tenlop_sosanh1!=$malop_sosanh1){
        header("location:../qllh.php");
        $_SESSION["thongbao"]= "<script> alert('Lớp cũ và lớp mới phải nằm trong cùng một khối')</script>";
        
    }
    else
    {
        $sql_select="SELECT * FROM lop WHERE TenLop='$tenlop'";
        $result_select=mysqli_query($conn, $sql_select);
        if(mysqli_num_rows($result_select)>0){
            header("location:../qllh.php");
            $_SESSION["thongbao"]= "<script> alert('Tên lớp đã tồn tại')</script>";
            
        }else
        {
            $sql_update = "UPDATE lop SET TenLop='$tenlop' WHERE MaLop='$malop'";
            $result = mysqli_query($conn, $sql_update);
            if ($result) {
                header("location:../qllh.php");
                $_SESSION["thongbao"]= "<script> alert('Sửa thành công')</script>";
                
            }
            else {
                header("location:../qllh.php");
                $_SESSION["thongbao"]= "<script> alert('Sửa không thành công')</script>";
                
            }
        }
    }   
}
echo json_encode($result);


