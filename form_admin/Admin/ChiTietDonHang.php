<?php
  include './header.php';
  include './menu.php';
  $MaDDH = $_GET['MaDHH'] ?? 0;
?>
  <!-- Sidebar menu-->
 
 <!-- Sidebar menu-->
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                
                <!-- <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                      class="fas fa-file-pdf"></i> Xuất PDF</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                      class="fas fa-trash-alt"></i> Xóa tất cả </a>
                </div> -->
                <div class="form-group col-md-3 ">
                  <form action="../back-end/DoiTrangThaiDonHang.php">
                    <input type="hidden" name="MaDHH" value="<?php echo $MaDDH ?>">
                <label for="exampleSelect1" class="control-label">Trạng thái đơn hàng</label>
                <select name="TinhTrang" required class="form-control"  id="exampleSelect1">
                  <option value="1">Chờ xử lý</option>
                  <option value="2">Đang Giao</option>
                  <option value="3">Đã hoàn thành</option>
                </select>
                <input class="btn btn-save" style="margin-top: 5px;" type="submit" value="Lưu">
                </form>
                </div>
              </div>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th width="10"><input type="checkbox" id="all"></th>
                    <th>ID đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Tên SP<th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                    <th>Ngày đặt</th>
                  
                  </tr>
                </thead>
                <tbody>
                <?php
                              $sql = "SELECT a.MaDDH, a.NgayDat, a.TongTien, b.HoTen, c.TenSP, c.SoLuong, c.DonGia
                              FROM dondathang a, thanhvien b, chitietdondathang c
                              WHERE a.MaDDH = $MaDDH AND a.MaDDH=c.MaDDH AND a.MaTV=b.MaThanhVien;";
                              if ($connection != null) {
                                try {
                                  $statement = $connection->prepare($sql);
                                  $statement->execute();
                                  $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                                  $dondathangs = $statement->fetchAll();
                                  foreach ($dondathangs as $dondathang) {
                                    
                                    $NgayDat = $dondathang['NgayDat'] ?? '';
                                    $TongTien= $dondathang['TongTien'] ?? '';
                                    $HoTen= $dondathang['HoTen'] ?? '';
                                    $TenSP= $dondathang['TenSP'] ?? '';
                                    $SoLuong= $dondathang['SoLuong'] ?? '';
                                    $DonGia= $dondathang['DonGia'] ?? '';
                                    $TongTien =0;
                                    $TongTien = $SoLuong * $DonGia;
                                    echo '<tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>'.$MaDDH.'</td>
                                    <td>'.$HoTen.'</td>
                                    <th>'.$TenSP.'<th>
                                    <td>'.number_format($DonGia, 0, '', ',').'</td>
                                    <td>'.$SoLuong.'</td>
                                    <td>'.number_format($TongTien, 0, '', ',').'</td>
                                    <td>'.$NgayDat.'</td>
                                    </tr>';
                                  
                                  }
                                } catch (PDOException $e) {
                                  echo "Cannot query database";
                                }
                              }
                              ?>
                  <!-- <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td>MD0837</td>
                    <td>Nguyễn Trung Thành</td>
                    <td>Nguyễn Trung Thành</td>
                    <td>9.400.000 đ</td>
                    <td>17/03/2023</td>
                    <td><span class="badge bg-success">Đã hoàn thành</span></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td>MD0837</td>
                    <td>Nguyễn Trung Thành</td>
                    <td>LAPTOP ACER ASPIRE A514-54-59QK</td>
                    <td>2</td>
                    <td>9.400.000 đ</td>
                    <td>17/03/2023</td>
                    <td><span class="badge bg-info">Chờ xử lý</span></td>
                    <td class="del"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                      data-target="#ModalUP"><i class="fas fa-edit"></i></button></td>
                  </tr>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td>MD0837</td>
                    <td>Nguyễn Trung Thành</td>
                    <td>LAPTOP ACER ASPIRE A514-54-59QK</td>
                    <td>2</td>
                    <td>9.400.000 đ</td>
                    <td>17/03/2023</td>
                    <td><span class="badge bg-warning">Đang vận chuyển</span></td>
                    <td class="del"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                      data-target="#ModalUP"><i class="fas fa-edit"></i></button></td>
                  </tr> -->
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
            <h5>Chỉnh sửa thông tin đơn hàng</h5>
          </span>
        </div>
      </div>
      <div class="row">
       
        <div class="form-group col-md-6">
            <label class="control-label">Khách hàng</label>
          <input class="form-control" type="text" required value="Nguyễn Trung Thành">
        </div>
        <div class="form-group  col-md-6">
            <label class="control-label">Đơn hàng</label>
          <input class="form-control" type="text" required value="LAPTOP ACER ASPIRE A514-54-59QK">
        </div>
        <div class="form-group  col-md-6">
          <label class="control-label">Số lượng</label>
        <input class="form-control" type="number" required value="20">
      </div>
      <div class="form-group  col-md-6">
        <label class="control-label">Tổng tiền</label>
      <input class="form-control" type="number" required value="20">
    </div>
    <div class="form-group  col-md-6">
      <label class="control-label">Ngày đặt hàng</label>
    <input class="form-control" type="date" required value="20">
  </div>
        <div class="form-group col-md-6 ">
            <label for="exampleSelect1" class="control-label">Tình trạng đơn hàng</label>
            <select class="form-control" id="exampleSelect1">
              <option>Chờ xử lý</option>
              <option>Đang vận chuyển</option>
              <option>Đã hoàn thành</option>
            </select>
          </div>
         
      </div>
        <div style="float: right; margin-bottom: 5px;">
            <button class="btn btn-save" type="button">Lưu lại</button>
            <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
        </div>
      <BR>
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
  <script type="text/javascript">$('#sampleTable').DataTable();</script>
  <script>
    function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable").deleteRow(i);
    }
    jQuery(function () {
      jQuery(".trash").click(function () {
        swal({
          title: "Cảnh báo",
         
          text: "Bạn có chắc chắn là muốn xóa đơn hàng này?",
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

    //EXCEL
    // $(document).ready(function () {
    //   $('#').DataTable({

    //     dom: 'Bfrtip',
    //     "buttons": [
    //       'excel'
    //     ]
    //   });
    // });


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
    //In dữ liệu
    var myApp = new function () {
      this.printTable = function () {
        var tab = document.getElementById('sampleTable');
        var win = window.open('', '', 'height=700,width=700');
        win.document.write(tab.outerHTML);
        win.document.close();
        win.print();
      }
    }
    //     //Sao chép dữ liệu
    //     var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

    // copyTextareaBtn.addEventListener('click', function(event) {
    //   var copyTextarea = document.querySelector('.js-copytextarea');
    //   copyTextarea.focus();
    //   copyTextarea.select();

    //   try {
    //     var successful = document.execCommand('copy');
    //     var msg = successful ? 'successful' : 'unsuccessful';
    //     console.log('Copying text command was ' + msg);
    //   } catch (err) {
    //     console.log('Oops, unable to copy');
    //   }
    // });


    //Modal
    $("#show-emp").on("click", function () {
      $("#ModalUP").modal({ backdrop: false, keyboard: false })
    });
  </script>
</body>

</html>