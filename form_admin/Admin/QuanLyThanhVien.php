<?php
  include './header.php';
  include './menu.php';
?>
  <!-- Sidebar menu-->
 
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách khách hàng</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
             
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                    class="fas fa-file-pdf"></i> Xuất PDF</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
              </div>
            </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th>ID khách hàng</th>
                  <th width="150">Họ và tên</th>
                  <th width="300">Địa chỉ</th>
                  <th>SĐT</th>
                  <th>Email</th>
                  <th width="100">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $sql = "SELECT * FROM thanhvien WHERE DaXoa = 0";

                    if($connection != null){
                    try{
                        $statement = $connection ->prepare($sql);
                        $statement->execute();
                        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                        $thanhviens = $statement->fetchAll();
                        if ($statement->rowCount() > 0) {
                            // The statement has data djd
                            foreach($thanhviens as $thanhvien) {
                                $HoTen = $thanhvien['HoTen'] ??'';
                                $MaLoaiTV = $thanhvien['MaLoaiTV'] ??'';
                                $MaThanhVien = $thanhvien['MaThanhVien'] ??'';
                                $Email = $thanhvien['Email'] ??'';
                                $DiaChi = $thanhvien['DiaChi'] ??'';
                                $SDT = $thanhvien['SoDienThoai'] ??'';
                                
                                echo '<tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>'.$MaThanhVien.'</td>
                                <td>'.$HoTen.'</td>
                                <td>'.$DiaChi.' </td>
                                <td>'.$SDT.'</td>
                                <td>'.$Email.'</td>
                                <td class="table-td-center del"><a onclick="confirm(`Bạn có chắc muốn xóa thành viên này không?`)" href="../back-end/xoaThanhVien.php?MaTV='.$MaThanhVien.'"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                    ><i class="fas fa-trash-alt"></i>
                                  </button></a>
                                  
                                </td>
                              </tr>';
                            }
                        } else {
                            // The statement doesn't have data
                            echo "No data";
                        }
                        
                        }catch(PDOException $e){
                            echo "Cannot query database";
                        }  
                    }

                ?>
                <!-- <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>1</td>
                  <td>Nguyễn Trung Thành</td>
                  <td>163 Thống Nhất, Bình Thọ, Thủ Đức, Hồ CHí Minh </td>
                  <td>0352180875</td>
                  <td>trungthanh0199@gmail.com</td>
                  <td class="table-td-center del"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                      onclick="confirm(`Bạn có chắc muốn xóa không`)"> <i class="fas fa-trash-alt"></i>
                    </button>
                    
                  </td>
                </tr> -->
 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>

  

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