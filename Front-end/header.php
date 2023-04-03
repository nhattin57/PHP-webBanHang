<?php
    require '../CauHinh/database.php'; 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="logo">
            <a href="./index.php"><img src="./images/TTQ_Shop.png" alt="" class="imageChange"></a>
        </div>
        <div class="menu">

    <!----------Menu-------->
    
      <?php include '../Back-end/multiMenu.php' ?>

        <div class="others">
            <li><input placeholder="Tìm kiếm" type="text"> <i class="fa fa-search"></i></li>
             <?php 

                
                session_start();
                //cart start
                $total_items = 0;
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        //$MaSP = $item['MaSP'];
                        $total_items += (int)$value['SoLuong'];
                    }
                }
                 //cart end     
                    
                // Check if the session is already active ?
                if (isset($_SESSION['user'])) {
                    //print_r($_SESSION["user"]);
                    // Session is active
                    echo '<li><h5 class="user_style">'.$_SESSION['user']['username'].'</h5></li>';
                    echo '<li><a href="../Back-end/logOut.php">Thoát</a></li>';
                    echo '<li><a class="fa fa-shopping-bag" href="./pay.php"></a>
                    <b id="count_shopping_cart_store" class="cart_counter_new">'.$total_items.'</b></li>';
                } else {
                    // Session is not active
                    echo '<li><a class="fa fa-user" href="./login.php"></a></li>';
                    echo '<li><a class="fa fa-shopping-bag" href="./pay.php"></a>
                    <b id="count_shopping_cart_store" class="cart_counter_new">'.$total_items.'</b>
                    </li>';
                }
                
             ?> 
            <!-- <li><a class="fa fa-user" href="./login.php"></a></li>
            <li>
                <a class="fa fa-shopping-bag" href=""></a>
                <b id="count_shopping_cart_store" class="cart_counter_new">0</b>
             </li> -->
        </div>
    </header>
    