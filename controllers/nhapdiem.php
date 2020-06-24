<?php require 'config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();

//  $diem=$_POST['diem'];
//  $mabangdiem=$_POST['mabangdiem'];
//  $loaihinh=$_POST['loaihinh'];
//$sql="INSERT INTO ct_bangdiemmon(MaBangDiemMon,MaLHKT,Diem) VALUES('$mabangdiem','$loaihinh','$diem')";
$mshs=isset($_POST['mshs'])?mysqli_escape_string($conn,$_POST['mshs']):"";
$kt15p1= isset($_POST['kt15p1'])?mysqli_escape_string($conn,$_POST['kt15p1']):"";
$kt15p2= isset($_POST['kt15p2'])?mysqli_escape_string($conn,$_POST['kt15p2']):"";
$kt15p3= isset($_POST['kt15p3'])?mysqli_escape_string($conn,$_POST['kt15p3']):"";
$kt1t1= isset($_POST['kt1t1'])?mysqli_escape_string($conn,$_POST['kt1t1']):"";
$kt1t2= isset($_POST['kt1t2'])?mysqli_escape_string($conn,$_POST['kt1t2']):"";
$THK= isset($_POST['THK'])?mysqli_escape_string($conn,$_POST['THK']):"";
$DTB= isset($_POST['DTB'])?mysqli_escape_string($conn,$_POST['DTB']):"";
$error=[];
$namhoc=isset($_POST['namhoc'])?mysqli_escape_string($conn,$_POST['namhoc']):"";
$hocky=isset($_POST['hocky'])?mysqli_escape_string($conn,$_POST['hocky']):"";
$lop=isset($_POST['lop'])?mysqli_escape_string($conn,$_POST['lop']):"";
$monhoc=isset($_POST['monhoc'])?mysqli_escape_string($conn,$_POST['monhoc']):"";

// Tạo bảng điểm môn
     $sql="update 
    bangdiemmon join quatrinhhoc 
    on bangdiemmon.MaQTHoc=quatrinhhoc.MaQTHoc
    set KiemTra15pl1='$kt15p1',KiemTra15pl2='$kt15p2',KiemTra15pl3='$kt15p3',KiemTra1tl1='$kt1t1',KiemTra1tl2='$kt1t2',ThiHocKy='$THK',DiemTBMon='$DTB'
    where MaHocSinh='$mshs' and mahocky='".$hocky.$namhoc."' and mamonhoc='$monhoc' and malop='$lop'";
    if($conn->query($sql)==true){
        $error[]=array(
            "error"=>false
        );
    }
    else{
        $error[]=array(
            "error"=>true,
            "message"=>$conn->error
        );
    }


echo json_encode($error);
