<?php
require '../../CauHinh/database.php';
    $MaSP = $_GET['MaSP'];

    $sql = "UPDATE sanpham SET DaXoa=1 WHERE MaSP = $MaSP";

    if($connection != null){
    try{
        $statement = $connection ->prepare($sql);
        $statement->execute();
        if($statement ->rowCount() >0){
            header('Location: ../Admin/QuanLySanPham.php');
        }
        }catch(PDOException $e){
            echo "Cannot query database";
        }  
    }
?>