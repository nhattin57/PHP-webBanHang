<?php
  include './header.php';
  include './menu.php';
?>
   <!-- Sidebar menu-->
 
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">Nhà cung cấp</li>
          <li class="breadcrumb-item"><a href="#">Thêm mới</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Tạo mới nhà cung cấp</h3>
            <div class="tile-body">
              <div class="row element-button">
                
  
              </div>
              <form class="row" action="../back-end/themNhaCungcap.php" method="post">
                <div class="form-group col-md-3">
                  <label class="control-label">Tên nhà cung cấp</label>
                  <input class="form-control" name="TenNCC" type="text" required placeholder="nhập tên nhà cung cấp">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Địa chỉ</label>
                  <input class="form-control" name="DiaChi" required type="text" placeholder="nhập địa chỉ">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Email</label>
                  <input class="form-control" name="Email" required type="text" placeholder="nhập email">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Số điện thoại</label>
                  <input class="form-control" name="SDT" required type="number" placeholder="nhập số điện thoại">
                </div>
              
          </div>
          
        </div>
        <div style="float: right; margin-bottom: 5px;">
          <input type="submit" class="btn btn-save" style="margin-right: 10px;" value="Lưu lại">
        <a class="btn btn-cancel" href="NhaCungCap.php">Hủy bỏ</a>
        </div>
        </form>
    </main>

  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>

</body>

</html>