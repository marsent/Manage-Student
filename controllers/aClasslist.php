<?php
require 'config/databaseController.php';

$conn = new DataAccessHelper();
$conn = $conn->connect();
$sql = "
select MaLop,TenLop,SiSo
from lop join khoilop on lop.MaKhoiLop=khoilop.MaKhoiLop
where(
    khoilop.MaNam=(
        select MaNam
        from namhoc
        ORDER BY NamHoc DESC LIMIT 1
    )
    and lop.SiSo < (select GiaTri
    from thongso Where MaThongSo like 'MAXSS')
    ) 
";
$result = $conn->query($sql);
$list = array();
while ($rows = $result->fetch_assoc()) {
    $list[] = array(
        "id" => $rows['MaLop'] ,
        "name" => $rows['TenLop'],
        "value" => $rows['SiSo']
    );
}
$conn->close();
echo json_encode($list);
?>