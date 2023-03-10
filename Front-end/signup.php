<?php 
        require 'header.php';
?>
    <!----end-menu----------->

    <!--login page-->
    <section id="signup">
        <form action="" id="form-signup">
            <h1 class="form-heading"><span>Đăng ký</span></h1>
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input type="text" class="form-input" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fa fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <i class="fa fa-key"></i>
                <input type="password" class="form-input" placeholder="Nhập lại mật khẩu">
            </div>
            <input type="submit" value="ĐĂNG KÝ" class="form-submit">
            <p>Bạn đã có tài khoản? Đăng nhập <a style="color:red; text-decoration-line: underline" href="http://127.0.0.1:5500/login.html"> tại đây.</a></p>
        </form>
    </section>

    <!------------Footer------------------>
    <?php 
        include 'footer.php';
    ?>