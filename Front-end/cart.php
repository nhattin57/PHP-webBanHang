<?php

session_start();

    $MaSP = $_GET['MaSP'];
    //$SoLuong = 1;
    //header('Location: ../Front-End/index.php');
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
      }
      
      // Kiểm tra nếu MaSP sản phẩm đã được thêm vào giỏ hàng
      if (isset($_SESSION['cart'][$MaSP])) {
        // Tăng số lượng sản phẩm lên 2 nếu đã tồn tại
        $_SESSION['cart'][$MaSP]['SoLuong'] +=1;
      } else {
        // Thêm sản phẩm mới vào giỏ hàng với số lượng mặc định là 1
        $_SESSION['cart'][$MaSP] = array('MaSP' => $MaSP, 'SoLuong' => 1);
      }
      print_r($_SESSION['cart']);
    //header('Location: ./product.php?MaSP='.$MaSP);
?>