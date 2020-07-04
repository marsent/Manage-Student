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
            $sql_select="SELECT * FROM lop WHERE TenLop='$tenlop'";
            $kq=mysqli_query($conn, $sql_select);
            $sql_tontai = "SELECT * FROM lop WHERE lop.MaLop LIKE '$tenlop_sosanh%';";
            $noichuoi = 'SLTDK'.$tenlop_sosanh;
            $sql_count = "SELECT GiaTri FROM thongso WHERE thongso.MaThongSo = '$noichuoi';";
            $tontairs = mysqli_query($conn,$sql_tontai);
            $counttd = mysqli_query($conn,$sql_count)->fetch_assoc();

            if($kq->num_rows>0)
            {
               echo "<script>alert('Lớp học đã tồn tại')</script>";
            }else if ($tontairs->num_rows >= $counttd['GiaTri']){
               echo "<script>alert('Số lớp trong khối đã đạt mức tối đa')</script>";
            }
            else{
                        $sql_insert="INSERT INTO lop(MaLop, TenLop, MaKhoiLop, SiSo) VALUES ('$malop', '$tenlop', '$makhoi', $siso)";
                        mysqli_query($conn, $sql_insert);
                        echo "<script>alert('Thêm lớp học thành công')</script>";

            }
         }
      }
