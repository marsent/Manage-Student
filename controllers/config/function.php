<?php

function getMaHK($conn, $hocky, $namhoc)
{
    $sql = "select mahocky from hocky where hocky='$hocky' and manam='$namhoc'";
    $mahocky = $conn->query($sql);
    return $mahocky->fetch_row()[0];
}

function getDiemQuaMon($conn){
   $sql= "SELECT * from thongso where mathongso='DDM'";
    $result=$conn->query($sql);
    return $result->fetch_row()[2];
}
function getDiemDat($conn){
    $sql= "SELECT * from thongso where mathongso='DD'";
     $result=$conn->query($sql);
     return $result->fetch_row()[2];
 }