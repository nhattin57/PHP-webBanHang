<?php
require 'header.php';
    $error = '';
    if(isset($_GET['error']))
        $error = $_GET['error'];
?>
<!----end-menu----------->

<!--login page-->
<section id="signup">
    <form action="../Back-end/register.php" method="post" id="form-signup">
        <h1 class="form-heading"><span>Đăng ký</span></h1>
        <div class="form-group">
            <i class="fa fa-user"></i>
            <input type="text" class="form-input" name="fullname" required placeholder="Họ và tên">
        </div>
        <div class="form-group">
            <i class="fa fa-user"></i>
            <input type="text" class="form-input" name="username" required placeholder="Tài khoản">
        </div>
        <div class="form-group">
            <i class="fa fa-key"></i>
            <input type="password" class="form-input" name="password" required placeholder="Mật khẩu">
        </div>
        <div class="form-group">
            <i class="fa fa-key"></i>
            <input type="password" class="form-input" name="repassword" required placeholder="Nhập lại mật khẩu">
        </div>
        <div class="form-group">
            <i class="fa fa-key"></i>
            <input type="email" class="form-input" name="Email" required placeholder="Email">
        </div>
        
           <h2 style="color: red;"> <?php echo $error?></h2>
        
        <input type="submit" value="ĐĂNG KÝ" class="form-submit">
        <p>Bạn đã có tài khoản? Đăng nhập <a style="color:red; text-decoration-line: underline" href="./login.php"> tại đây.</a></p>
    </form>
</section>

<!------------Footer------------------>
<?php
include 'footer.php';
?>