<?php
    require '../CauHinh/database.php';
    session_start();
    $SoLuong = $_GET['SoLuong'];
    $MaSP = $_GET['MaSP'];
    $action = $_GET['action'] ?? 'xoa';

    if($action == "capnhat"){
        $_SESSION['cart'][$MaSP]['SoLuong'] = $SoLuong;
    }else {
        unset($_SESSION['cart'][$MaSP]);
    }

    header("location: ../Front-end/pay.php");
?>