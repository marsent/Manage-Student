<?php require './database/databaseController.php';

$db = new DataAccessHelper();
$conn = $db->connect();
$id=isset($_POST['id'])?mysqli_escape_string($conn,$_POST['id']):"";
echo $id;
if ($id!="") {
$sql="DELETE FROM hocsinh WHERE MaHocSinh='$id'";
$db->executeQuery($sql);
}
echo json_encode($id);
$db->close();
?>