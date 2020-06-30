<<<<<<< HEAD
<?php
require 'config/databaseController.php';
=======
<<<<<<< HEAD
<?php
require './config/databaseController.php';
=======
<?php require 'config/databaseController.php';
>>>>>>> b92396f32b5f24be7fdd2eef14476b07fc0fc2ff
>>>>>>> 68a5c1eca2c4103c723d4e75055f5778a078b424

$db = new DataAccessHelper();
$conn = $db->connect();
$sql = "
select MaLop,TenLop,SiSo
from lop join khoilop on lop.MaKhoiLop=khoilop.MaKhoiLop
where(
    khoilop.MaNam=(
        select MaNam
        from namhoc
        ORDER BY NamHoc DESC LIMIT 1
    )
    ) 
";
$result = $conn->query($sql);
$class = array();
while ($rows = $result->fetch_assoc()) {
<<<<<<< HEAD
    $class[] = array(
        "MaLop" => $rows['MaLop'] ,
        "TenLop" => $rows['TenLop'], 
=======
    $list[] = array(
        "id" => $rows['MaLop'] ,
<<<<<<< HEAD
        "name" => $rows['TenLop'],
        "value" => $rows['SiSo']
=======
        "name" => $rows['TenLop'], 
>>>>>>> b92396f32b5f24be7fdd2eef14476b07fc0fc2ff
>>>>>>> 68a5c1eca2c4103c723d4e75055f5778a078b424
    );
}
$conn->close();
echo json_encode($class);
?>