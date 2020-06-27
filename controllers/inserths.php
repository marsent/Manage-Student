<?php require 'config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();

for ($i=1;$i<=10;$i++){
   // $sql="insert into hocsinh(mahocsinh,hoten,gioitinh,ngaysinh,diachi,email) values('HS$i','Phạm Nguyễn Trần Văn ABCD','Nam','2000/02/19','Kí Túc Xá khu B Đại học quốc gia Thành phố Hồ Chí Minh','123@gmail.com')";
    // $conn->query($sql);
    
    $sql="insert into quatrinhhoc(maqthoc,mahocsinh,malop,mahocky) values('12HK2N1920HS$i','HS$i','12A1N1920','HK2N1920')";
    $conn->query($sql);
    echo $conn->error;
}

$conn->close();