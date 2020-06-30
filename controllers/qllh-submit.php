<?php
     include"./controllers/config/databaseController.php";
     $conn = new DataAccessHelper();
     $conn->connect();
     mysqli_set_charset($conn,"utf8");

     if(isset($_POST["submit"]) && isset($_POST["MaKhoiLop"]) && isset($_POST["MaLop"]) && isset($_POST["TenLop"])){
         $makhoi=$_POST["MaKhoiLop"];
         $malop=$_POST["MaLop"];
         $tenlop=$_POST["TenLop"];
        //  $SiSo="SELECT count(h.MaHocSinh) FROM lop l, hocsinh h, quatrinhhoc q WHERE l.MaLop=q.MaLop AND q.MaHocSinh=h.MaHocSinh AND l.MaLop='$malop'";
        //  $rs = mysqli_query($conn,$SiSo);
        //  $listSiSo = $rs->fetch_array();
        //  $siso=$listSiSo[0];
        //  var_dump($siso);
        $siso=0;
         $sql="SELECT * FROM lop l, khoilop k WHERE l.MaKhoiLop=k.MaKhoiLop AND k.MaKhoiLop='$makhoi'";
         $result=mysqli_query($conn,$sql);
         if(mysqli_num_rows($result)>0){
             $sql_insert="INSERT INTO lop(MaLop, TenLop, MaKhoiLop, SiSo) VALUES ('$malop', '$tenlop', '$makhoi', $siso)";
             mysqli_query($conn, $sql_insert);
             echo "<script>alert('Thêm lớp học thành công')</script>";
             
         }else{
             echo "<script>alert('Bạn đã nhập sai mã khối lớp, vui lòng nhập lại!')</script>";
         }
     }
?>