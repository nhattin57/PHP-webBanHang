<?php
  include './header.php';
  
 include './menu.php';
 include '../back-end/thongke.php';
?>
   <!-- Sidebar menu-->
 
  <main class="app-content">
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>Bảng điều khiển</b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>
        <div class="row">
          <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
              <div class="info">
                <h4>Tổng khách hàng</h4>
                <p><b><?php echo $SoLuongTV ?> khách hàng</b></p>
                <p class="info-tong">Tổng số khách hàng được quản lý.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
              <div class="info">
                <h4>Tổng sản phẩm</h4>
                <p><b><?php echo $SoLuongSanPham ?> sản phẩm</b></p>
                <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
              <div class="info">
                <h4>Tổng đơn hàng</h4>
                <p><b><?php echo $SoLuongDonDatHang ?> đơn hàng</b></p>
                <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small danger coloured-icon"><i class='icon bx bxs-error-alt fa-3x'></i>
              <div class="info">
                <h4>Hết hàng</h4>
                <p><b><?php echo $SoLuongSanPhamHetHang ?> sản phẩm</b></p>
                <p class="info-tong">Số sản phẩm cảnh báo hết cần nhập thêm.</p>
              </div>
            </div>
          </div>
          <!-- col-12 -->
          <div class="col-md-12">
            <div class="tile">
              <h3 class="tile-title">Tình trạng đơn hàng</h3>
              <div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID đơn hàng</th>
                      <th>Tên khách hàng</th>
                      <th>Tổng tiền</th>
                      <th>Trạng thái</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                           $sql = "SELECT a.MaDDH, b.HoTen, a.TongTien, a.TinhTrangGiaoHang, a.DaThanhToan  
                           FROM dondathang a 
                           JOIN thanhvien b ON a.MaTV = b.MaThanhVien
                           ORDER BY NgayDat DESC;";

                           if($connection != null){
                            try{
                                $statement = $connection ->prepare($sql);
                                $statement->execute();
                                $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                                $dondathangs = $statement->fetchAll();
                                foreach($dondathangs as $dondathang) {
                                  $HoTen = $dondathang['HoTen'] ??'';
                                  $TongTien = $dondathang['TongTien'] ??'';
                                  $TinhTrangGiaoHang = $dondathang['TinhTrangGiaoHang'] ??'';
                                  $DaThanhToan = $dondathang['DaThanhToan'] ??'';
                                  $MaDDH = $dondathang['MaDDH'] ??'';
                                  echo ' <tr>
                                            <td>'.$MaDDH.'</td>
                                            <td>'.$HoTen.'</td>
                                            <td>
                                              '.number_format($TongTien, 0, '', ',').' đ
                                            </td>
                                            <td>';  //<span class="badge bg-info">Chờ xử lý</span></td> </tr>
                                  if( $TinhTrangGiaoHang ==0 && $DaThanhToan==0){
                                    echo '<span class="badge bg-info">Chờ xử lý</span>
                                            </td>
                                        </tr>';
                                  } else if($TinhTrangGiaoHang ==1 && $DaThanhToan==0){
                                    echo '<span class="badge bg-warning">Đang vận chuyển</span></td>
                                        </tr>';
                                  }else{
                                    echo '<span class="badge bg-success">Đã hoàn thành</span></td>
                                        </tr>';
                                  }
                                }
                                }catch(PDOException $e){
                                    echo "Cannot query database";
                                }  
                            }
                    ?>
                    <!-- <tr>
                      <td>12121</td>
                      <td>Nguyễn Trung Thành</td>
                      <td>
                        19.770.000 đ
                      </td>
                      <td><span class="badge bg-info">Chờ xử lý</span></td>
                    </tr> -->
                   
                    <!-- <tr>
                      <td>ER3835</td>
                      <td>Đào Nhật Tín</td>
                      <td>
                        16.770.000 đ
                      </td>
                      <td><span class="badge bg-warning">Đang vận chuyển</span></td>
                    </tr>
                    <tr>
                      <td>MD0837</td>
                      <td>Nguyễn Văn Quang</td>
                      <td>
                        9.400.000 đ
                      </td>
                      <td><span class="badge bg-success">Đã hoàn thành</span></td>
                    </tr> -->
                    
                  </tbody>
                </table>
              </div>
              
            </div>
          </div>
          
        </div>
  </main>

  <script src="js/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="js/popper.min.js"></script>
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <!--===============================================================================================-->
  <script src="js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!--===============================================================================================-->
  <script src="js/plugins/pace.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="js/plugins/chart.js"></script>
  <!--===============================================================================================-->
 
  <script type="text/javascript">
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