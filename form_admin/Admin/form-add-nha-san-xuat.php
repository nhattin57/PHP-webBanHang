<?php
  include './header.php';
  include './menu.php';
?>
    <!-- Sidebar menu-->
 
 <!-- Sidebar menu-->
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">Nhà sản xuất</li>
          <li class="breadcrumb-item"><a href="#">Thêm mới nhà sản xuất</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Tạo mới nhà sản xuất</h3>
            <div class="tile-body">
              <form class="row" action="../back-end/themNSX.php" method="get">
                <div class="form-group col-md-4">
                  <label class="control-label">Tên nhà sản xuất</label>
                  <input class="form-control" name="TenNSX" type="text" placeholder="nhập tên nhà sản xuất">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Thông tin</label>
                  <input class="form-control" name="ThongTin" type="text" placeholder="nhập thông tin">
                </div>
            <div class="tile-footer">
            </div>
          </div>
          
        </div>
        <div style="float: right; margin-bottom: 5px;">
          <input type="submit" class="btn btn-save" style="margin-right: 10px;" value="Lưu lại">
        <a class="btn btn-cancel" href="NhaSanXuat.html">Hủy bỏ</a>
        </div>
  </form>
    </main>

 <!--
  MODAL
-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-body">
      <div class="row">
        <div class="form-group  col-md-12">
          <span class="thong-tin-thanh-toan">
            <h5>Tạo trình trạng mới</h5>
          </span>
        </div>
        <div class="form-group col-md-12">
          <label class="control-label">Nhập tình trạng</label>
          <input class="form-control" type="text" required>
        </div>
      </div>
      <BR>
      <button class="btn btn-save" type="button">Lưu lại</button>
      <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
      <BR>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>
<!--
MODAL
-->

 <!-- Essential javascripts for application to work-->
 <script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/main.js"></script>
 <!-- The javascript plugin to display page loading on top-->
 <script src="js/plugins/pace.min.js"></script>

</body>

</html>