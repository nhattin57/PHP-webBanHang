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
            <a href="index.html"></a><img src="images/logo.png" alt="" class="imageChange">
        </div>
        <div class="menu">

    <!----------Menu-------->
    
      <?php include '../Back-end/multiMenu.php' ?>

        <div class="others">
            <li><input placeholder="Tìm kiếm" type="text"> <i class="fa fa-search"></i></li>
            <!-- <?php 

                session_start();
                // Check if the session is already active ?
                if (isset($_SESSION['user'])) {
                    //print_r($_SESSION["user"]);
                    // Session is active
                    echo '<h5>'.$_SESSION['user']['username'].'</h5>';
                    echo '<li><a class="fa fa-user" href="">Thoát</a></li>';
                    echo '<li><a class="fa fa-shopping-bag" href=""></a></li>';
                } else {
                    // Session is not active
                    echo '<li><a class="fa fa-user" href="./login.php"></a></li>';
                    echo '<li><a class="fa fa-shopping-bag" href=""></a></li>';
                }
                
             ?> -->
            <li><a class="fa fa-user" href=""></a></li>
            <li><a class="fa fa-shopping-bag" href=""></a></li>
        </div>
    </header>
    