<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
 <aside class="app-sidebar">
   <div class="app-sidebar__user">
     <div>
       <?php
          echo ' <p class="app-sidebar__user-name"><b>'.$_SESSION['admin']['username'].'</b></p>
          <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>';
      ?> 
          <!-- <p class="app-sidebar__user-name"><b>Trung Thành</b></p>
          <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p> -->
     </div>
   </div>
   <hr>
   <ul class="app-menu">

     <li>
       <a class="app-menu__item " href="index.php">
         <i class='app-menu__icon bx bx-tachometer'></i>
         <span class="app-menu__label">Bảng điều khiển
         </span>
       </a>
     </li>

     <li>
       <a class="app-menu__item " href="QuanLyThanhVien.php">
         <i class='app-menu__icon bx bx-user-voice'></i>
         <span class="app-menu__label">Quản lý khách hàng
         </span>
       </a>
     </li>

     <li>
       <a class="app-menu__item" href="QuanLySanPham.php">
         <i class='app-menu__icon bx bx-purchase-tag-alt'></i>
         <span class="app-menu__label">
           Quản lý sản phẩm
         </span>
       </a>
     </li>

     <li>
       <a class="app-menu__item" href="QuanLyDonHang.php">
         <i class='app-menu__icon bx bx-task'></i>
         <span class="app-menu__label">
           Quản lý đơn hàng
         </span>
       </a>
     </li>

     <li>
       <a class="app-menu__item" href="NhaCungCap.php">
         <i class='app-menu__icon bx bx-book-add'></i>
         <span class="app-menu__label">
           Nhà cung cấp
         </span>
       </a>
     </li>

     <li>
       <a class="app-menu__item " href="NhaSanXuat.php">
         <i class='app-menu__icon bx bx-building-house'></i>
         <span class="app-menu__label">
           Nhà sản xuất
         </span>
       </a>
     </li>

     <li>
       <a class="app-menu__item" href="quan-ly-bao-cao.php">
         <i class='app-menu__icon bx bx-pie-chart-alt-2'></i>
         <span class="app-menu__label">
           Báo cáo doanh thu
         </span>
       </a>
     </li>
   </ul>
 </aside>