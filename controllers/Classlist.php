<?php require 'config/databaseController.php';

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
    $list[] = array(
        "id" => $rows['MaLop'] ,
        "name" => $rows['TenLop'], 
    );
}
$conn->close();
echo json_encode($class);
?>