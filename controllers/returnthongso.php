<?php require './config/databaseController.php';
$db = new DataAccessHelper();
$conn = $db->connect();

$sql="SELECT * from thongso";
$result=$conn->query($sql);
$thongso=array();
foreach($result as $value){
    $thongso[]=array(
        "mathongso"=>$value['MaThongSo'],
        "tenthongso"=>$value['TenThongSo'],
        "giatri"=>$value['GiaTri']
    );
}
echo json_encode($thongso);