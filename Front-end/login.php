<?php 
        require 'header.php';
        if(isset($_SESSION['user']))
            header('Location: ../Front-end/index.php');
        if(isset($_SESSION['admin']))
            header('Location: ../form_admin/Admin/index.php');

        $error = '';
        // Lấy dữ liệu từ form đăng nhập
        if (isset($_GET['error_message'])) {
            $error = $_GET['error_message'];
            // Display the error message
        }
        
?>
    <!----end-menu----------->

    <!--login page-->
    <div id="login">
        <form action="../Back-end/login.php" id="form-login" method="post">
            <h1 class="form-heading"><span>Đăng nhập</span></h1>
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input type="text" class="form-input" name="username" placeholder="Tài khoản">
            </div>
            <div class="form-group">
                <i class="fa fa-key"></i>
                <input type="password" class="form-input" name="password" placeholder="Mật khẩu">
            </div>
            <h2 style="color: red; font-size: 15px; text-align: center;"><?php echo $error;  ?></h2>
            <input type="submit" value="Đăng nhập" class="form-submit">
            <p>Bạn chưa có tài khoản? Đăng ký <a style="color:red; text-decoration-line: underline" href="./signup.php"> tại đây.</a></span>
        </form>
    </div>

    <!------------Footer------------------>
    <?php 
        include 'footer.php';
    ?>