<?php 
        require 'header.php';
        // Lấy dữ liệu từ form đăng nhập

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
            <input type="submit" value="Đăng nhập" class="form-submit">
            <p>Bạn chưa có tài khoản? Đăng ký <a style="color:red; text-decoration-line: underline" href="http://127.0.0.1:5500/signup.html"> tại đây.</a></span>
        </form>
    </div>

    <!------------Footer------------------>
    <?php 
        include 'footer.php';
    ?>