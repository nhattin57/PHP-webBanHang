<?php
  include './header.php';
 include './menu.php';
?>
   <!-- Sidebar menu-->
 
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
              
                              <a class="btn btn-add btn-sm" href="./form-add-san-pham.php" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                            </div>  
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                                  class="fas fa-file-pdf"></i> Xuất PDF</a>
                            </div>
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
                            </div>
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Tình trạng</th>
                                    <th>Giá tiền</th>
                                    <th>Loại sản phẩm</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                $sql = "SELECT * FROM `sanpham` WHERE DaXoa =0";

                                if($connection != null){
                                try{
                                    $statement = $connection ->prepare($sql);
                                    $statement->execute();
                                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                                    $sanphams = $statement->fetchAll();
                                    if ($statement->rowCount() > 0) {
                                      foreach($sanphams as $sanpham) {
                                        $MaSP = $sanpham['MaSP'] ??'';
                                        $TenSP = $sanpham['TenSP'] ??'';
                                        $DonGia = $sanpham['DonGia'] ??'';
                                        $CauHinh = $sanpham['CauHinh'] ??'';
                                        $HinhAnh = $sanpham['HinhAnh'] ??'';
                                        $SoLuongTon = $sanpham['SoLuongTon'] ??'';
                                        $MaLoaiSP = $sanpham['MaLoaiSP'] ??'';
                                        $LoaiSanPham;
                                        switch ($MaLoaiSP) {
                                          case 1:
                                              $LoaiSanPham = 'Điện Thoại';
                                              break;
                                          case 2:
                                              $LoaiSanPham = 'LapTop';
                                              break;
                                          case 3:
                                              $LoaiSanPham = 'Máy tính bảng';
                                              break;
                                          case 4:
                                              $LoaiSanPham = 'Phụ Kiện';
                                              break;
                                          default:
                                              $LoaiSanPham = '';
                                      }

                                      echo
                                      '<tr>
                                      <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                      <td>'.$MaSP.'</td>
                                      <td>$'.$TenSP.'</td>
                                      <td><img src="../../HinhAnh/'.$HinhAnh.'" alt="" width="100px;"></td>
                                      <td>'.$SoLuongTon.'</td>';
                                      if($SoLuongTon >0)
                                        echo '<td><span class="badge bg-success">Còn hàng</span></td>';
                                      else
                                        echo '<td><span class="badge bg-danger">Hết hàng</span></td>';
                                      echo ' <td>'.number_format($DonGia, 0, '', ',').' đ</td>
                                      <td>'.$LoaiSanPham.'</td>
                                      <td class="del"><a href ="../back-end/xoaSanPham.php?MaSP='.$MaSP.'"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                              ><i class="fas fa-trash-alt"></i> 
                                          </button></a>
                                         <a href =""><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"data-target="#ModalUP">
                                            <i class="fas fa-edit"></i>
                                          </button></a>
                                         
                                      </td>
                                  </tr>';
                                      }
                                      
                                    } else {
                                        // The statement doesn't have data
                                       echo " no data";
                                    }
                                    
                                    }catch(PDOException $e){
                                        echo "Cannot query database";
                                    }  
                                }

                              ?>
                                

                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!--
  MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
data-keyboard="false">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-body">
      <div class="row">
        <div class="form-group  col-md-12">
          <span class="thong-tin-thanh-toan">
            <h5>Chỉnh sửa thông tin sản phẩm cơ bản</h5>
          </span>
        </div>
      </div>
      <div class="row">
        
        <div class="form-group col-md-6">
            <label class="control-label">Tên sản phẩm</label>
          <input class="form-control" type="text" required value="LAPTOP ACER ASPIRE A514-54-59QK">
        </div>
        <div class="form-group  col-md-6">
            <label class="control-label">Số lượng</label>
          <input class="form-control" type="number" required value="20">
        </div>
        <div class="form-group col-md-6 ">
            <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
            <select class="form-control" id="exampleSelect1">
              <option>Còn hàng</option>
              <option>Hết hàng</option>
              <option>Đang nhập hàng</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label">Giá bán</label>
            <input class="form-control" type="number" required value="5600000">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleSelect1" class="control-label">Loại sản phẩm</label>
            <select class="form-control" id="exampleSelect1">
              <option>Điện thoại</option>
              <option>Laptop</option>
              <option>Ipad</option>
              
            </select>
          </div>
      </div>
      <div style="float: right; margin-bottom: 5px;">
        <button class="btn btn-save" type="button">Lưu lại</button>
        <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
    </div>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="src/jquery.table2excel.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
        //Thời Gian
    function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Chủ Nhật";
      weekday[1] = "Thứ Hai";
      weekday[2] = "Thứ Ba";
      weekday[3] = "Thứ Tư";
      weekday[4] = "Thứ Năm";
      weekday[5] = "Thứ Sáu";
      weekday[6] = "Thứ Bảy";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " giờ " + m + " phút " + s + " giây";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }
    </script>
    <script>
        function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("myTable").deleteRow(i);
        }
        jQuery(function () {
            jQuery(".trash").click(function () {
                swal({
                    title: "Cảnh báo",
                    text: "Bạn có chắc chắn là muốn xóa sản phẩm này?",
                    buttons: ["Hủy bỏ", "Đồng ý"],
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Đã xóa thành công.!", {

                            });
                        }
                    });
            });
        });
        oTable = $('#sampleTable').dataTable();
        $('#all').click(function (e) {
            $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
            e.stopImmediatePropagation();
        });
    </script>
</body>

</html>