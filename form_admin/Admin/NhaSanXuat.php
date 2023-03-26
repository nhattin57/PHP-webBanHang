<?php
  include './header.php';
  include './menu.php';
?>
  <!-- Sidebar menu-->
 
 <!-- Sidebar menu-->
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Nhà sản xuất</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
  
                  <a class="btn btn-add btn-sm" href="form-add-nha-san-xuat.php" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới</a>
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
                    <th>Tên nhà sản xuất</th>
                    <th>Thông tin</th>
                    <th>Logo</th>
                    
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                              $sql = "SELECT * FROM `nhasanxuat` GROUP BY TenNSX DESC";
                              if ($connection != null) {
                                try {
                                  $statement = $connection->prepare($sql);
                                  $statement->execute();
                                  $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                                  $nhasanxuats = $statement->fetchAll();
                                  foreach ($nhasanxuats as $nhasanxuat) {
                                    $TenNSX = $nhasanxuat['TenNSX'] ?? '';
                                    $ThongTin = $nhasanxuat['ThongTin'] ?? '';
                                    $Logo= $nhasanxuat['Logo'] ?? '';

                                    echo '      <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>'.$TenNSX.'</td>
                                    <td>'.$ThongTin.'</td>
                                    <td><img style="height: 100px;"; src="../../HinhAnh/'.$Logo.'" alt=""></td>
                                    <td class="del">
                                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                                                    data-target="#ModalUP"><i class="fas fa-edit"></i></button></td>
                                  </tr>
                                  <tr>';
                                  
                                  }
                                } catch (PDOException $e) {
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

<!--
MODAL
-->

   <!-- Essential javascripts for application to work-->
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
    // function deleteRow(r) {
    //   var i = r.parentNode.parentNode.rowIndex;
    //   document.getElementById("myTable").deleteRow(i);
    // }
    // jQuery(function () {
    //   jQuery(".trash").click(function () {
    //     swal({
    //       title: "Cảnh báo",
         
    //       text: "Bạn có chắc chắn là muốn xóa?",
    //       buttons: ["Hủy bỏ", "Đồng ý"],
    //     })
    //       .then((willDelete) => {
    //         if (willDelete) {
    //           swal("Đã xóa thành công.!", {
                
    //           });
    //         }
    //       });
    //   });
    // });
    // oTable = $('#sampleTable').dataTable();
    // $('#all').click(function (e) {
    //   $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
    //   e.stopImmediatePropagation();
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
   
  </script>
</body>

</html> 