<<<<<<< HEAD
<?php
require './config/databaseController.php';
=======
<?php require 'config/databaseController.php';
>>>>>>> b92396f32b5f24be7fdd2eef14476b07fc0fc2ff

$db = new DataAccessHelper();
$conn = $db->connect();
$sql = "
select MaLop,TenLop
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
        "name" => $rows['TenLop'], 
>>>>>>> b92396f32b5f24be7fdd2eef14476b07fc0fc2ff
    );
}
$conn->close();
echo json_encode($class);
?>