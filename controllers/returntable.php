<?php 
$db = new DataAccessHelper();
$conn = $db->connect();
$sql = "SELECT * from lop ";
$result = $conn->query($sql);
$lop = array();
while ($rows = $result->fetch_assoc()) {
    $lop[] = array(
        "MaLop" => $rows['MaLop'],
        "TenLop" => $rows['TenLop'],
    );
}

$sql = "SELECT * from namhoc";
$result = $conn->query($sql);
$namhoc = array();
while ($rows = $result->fetch_assoc()) {
    $namhoc[] = array(
        "MaNam" => $rows['MaNam'],
        "NamHoc" => $rows['NamHoc']
    );
}

function printNamhoc($namhoc)
{
    foreach ($namhoc as $value) {
        echo " <option value=" . $value['MaNam'] . ">" . $value['NamHoc'] . "</option>";
    }
}

$sql = "SELECT * from monhoc";
$result = $conn->query($sql);
$monhoc = array();
while ($rows = $result->fetch_assoc()) {
    $monhoc[] = array(
        "MaMonHoc" => $rows['MaMonHoc'],
        "TenMonHoc" => $rows['TenMonHoc']
    );
}
function printTableMonHoc($monhoc)
{
    foreach ($monhoc as $value) {
        $html = " <tr>
        <td scope='row'>" . $value['MaMonHoc'] . "</td>
        <td>" . $value['TenMonHoc'] . "</td>
        <td> <button class='btn btn-primary'> Sửa</button> <button class='btn btn-primary'> Xóa</button> </td>
    </tr>";
        echo $html;
    }
}
