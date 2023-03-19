<?php
    include '../../CauHinh/database.php';
    $MaTV = $_GET['MaTV'] ??'';

$sql = "UPDATE `thanhvien` SET `DaXoa`= 1 WHERE `MaThanhVien` =$MaTV";
if($connection != null){
try{
    $statement = $connection ->prepare($sql);
    $statement->execute();
    header('Location: ../Admin/QuanLyThanhVien.php');
    }catch(PDOException $e){
        echo "Cannot query database";
    }  
}
?>