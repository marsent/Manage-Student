<?php
     include"./controllers/config/databaseController.php";
     $conn = new DataAccessHelper();
     $conn->connect();
     mysqli_set_charset($conn,"utf8");

     if(isset($_POST["submit"]) && isset($_POST["MaKhoiLop"]) && isset($_POST["TenLop"])){
        $makhoi=$_POST["MaKhoiLop"];
        $manam= substr($makhoi,3);
        $tenlop=$_POST["TenLop"];
        $malop=$tenlop.$manam;
        $makhoi_sosanh=substr($makhoi, 1, 2);
        $tenlop_sosanh=substr($tenlop, 0, 2);
        $siso=0;
         if($makhoi_sosanh!=$tenlop_sosanh)
         {
            echo "<script>alert('Lớp học phải thuộc đúng khối')</script>";
         }
         else{
            $sql_insert="INSERT INTO lop(MaLop, TenLop, MaKhoiLop, SiSo) VALUES ('$malop', '$tenlop', '$makhoi', $siso)";
            mysqli_query($conn, $sql_insert);
            echo "<script>alert('Thêm lớp học thành công')</script>";
         }
         
     }
