<?php
require 'header.php';
           
?>
<!----end-menu----------->

<!----content----------->
<section class="product">
    <div class="containers">
   
    <?php
        $MaSP;
        if (isset($_GET['MaSP'])) {
            $MaSP = $_GET['MaSP'];
        }
        $LoaiSanPham;


        $sql = 'select TenSP, DonGia, CauHinh, MaLoaiSP,HinhAnh FROM `sanpham` WHERE MaSP =' . $MaSP;

        if ($connection != null) {
            try {
                $statement = $connection->prepare($sql);
                $statement->execute();
                $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                $sanphams = $statement->fetchAll();
                if ($statement->rowCount() > 0) {
                    // The statement has data djd
                    foreach ($sanphams as $sanpham) {
                        $TenSP = $sanpham['TenSP'] ?? '';
                        $DonGia = $sanpham['DonGia'] ?? '';
                        $CauHinh = $sanpham['CauHinh'] ?? '';
                        $MaLoaiSP = $sanpham['MaLoaiSP'] ?? '';
                        $CauHinh = $sanpham['CauHinh'] ?? '';
                        $HinhAnh = $sanpham['HinhAnh'] ?? '';
                        
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
                        echo '<div class="product-top row">
                                <p><a href="./index.php">Trang chủ</a></p><span>&#62;</span><p>'.$LoaiSanPham.'</p><span>&#62;</span><p>'.$TenSP.'</p>
                            </div>
                            <div class="product-content row">
                                <div class="product-content-left row">
                                    <div class="product-content-left-big-img">
                                        <img src="../HinhAnh/'.$HinhAnh.'" alt="">
                                    </div>
                                   
                                </div>
                                <div class="product-content-right">
                                    <div class="product-content-right-product-name">
                                        <h1>'.$TenSP.'</h1>
                                        <p>Mã SP: '.$MaSP.'</p>
                                    </div>
                                    <div class="product-content-right-product-item" style="padding-top: 10px;">
                                        <div class="product-content-right-product-item-title">
                                            Thông số sản phẩm
                                        </div>
                                        
                                        <ul class="product-content-right-product-item-ul">
                                            <li>
                                                <i class="fa fa-check-circle"></i>
                                                '.$CauHinh.'
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="product-content-right-product-price">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td width="130px" class="font-600">
                                                        Giá niêm yết:
                                                    </td>
                                                    <td>
                                                        <del style="color: #888888;" class="font-600">
                                                            '.number_format($DonGia, 0, '', ',').' đ 
                                                        </del>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="130px" class="font-600">
                                                        Giá khuyến mại:
                                                    </td>
                                                    <td>
                                                       <b style="color: #ce0707;" class="text-18">'.number_format($DonGia, 0, '', ',').' đ</b>
                                                       <span style="color: #888888;" class="text-12">
                                                            [Giá đã có VAT]
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="quantity">
                                        <p style="font-weight: bold;">Số lượng:</p>
                                        <input type="number" min="0" value="1">
                                    </div>
                                    <div class="product-content-right-product-button">
                                        <button>
                                            <b class="d-block">ĐẶT MUA NGAY</b>
                                            <span class="d-block">Nhanh chóng, thuận tiện</span>
                                        </button>
                                        <button>
                                            <b class="d-block">CHO VÀO GIỎ</b>
                                            <span class="d-block">Mua tiếp sản phẩm khác</span>
                                        </button>
                                    </div>
                                    <div class="product-content-right-bottom">
                
                                    </div>
                
                                </div>
                            </div>';
                    }
                } else {
                    // The statement doesn't have data
                    echo "No data in query";
                }
            } catch (PDOException $e) {
                echo "Cannot query database";
            }
        }
        ?>

        <!-- <div class="product-description">
                <div class="product-description-item">
                    <h1 class="product-description-item-title">MÔ TẢ SẢN PHẨM</h1>
                    <p><em><strong>Lưu ý: Bài viết và hình ảnh chỉ có tính chất tham khảo vì cấu hình và đặc tính sản phẩm có thể thay đổi theo thị trường và từng phiên bản.</strong></em></p>
                    <p>
                        <span style="font-size: 14pt;">
                            <img src="images/laptop-acer-aspire-5-9.jpeg" alt="Laptop Acer Aspire 5 1" width="1275" height="850" class="loading" data-was-processed="true">
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            Acer vừa cho ra mắt dòng sản phẩm chủ lực Aspire 5 2020 với diện mạo trẻ trung hơn, đa sắc màu hơn. Được ưu ái trang bị những công nghệ tân tiến nhất với CPU Tiger Lake thế hệ 11 và card đồ họa tích hợp Intel UHD, wifi 6 và màn IPS 15.6 inch FHD với công nghệ bảo vệ mắt độc quyền Acer ComfyView LCD.
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14pt;">
                            <img src="images/laptop-acer-aspire-5-1.jpeg" alt="Laptop Acer Aspire 5 1" width="1275" height="850" class="loading" data-was-processed="true">
                        </span>
                    </p>
                    <h3 style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            THANH LỊCH, SANG TRỌNG, CÁ TÍNH
                        </span>
                    </h3>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">
                            Thiết kế thanh lịch, tinh tế trong từng chi tiết với chất liệu kim loại sang trọng kết hợp cùng nhiều sự lựa chọn màu sắc, Aspire 5 hứa hẹn thể hiện đậm nét cá tính riêng dù bạn theo đuổi phong cách nào.
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            Mỏng hơn, nhẹ hơn với một Aspire 5 A515-56G-51YL hiện đại có màn hình tràn viền, chỉ nhẹ 1.46kg và mỏng 17.95mm, cực kì thích hợp cho mọi hoạt động làm việc, học tập, giải trí ở bất cứ đâu.
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14pt;">
                            <img src="images/laptop-acer-aspire-5-2.jpeg" alt="Laptop Acer Aspire 5 1" width="1275" height="750">
                        </span>
                    </p>
                    <h3 style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            TÍCH HỢP CPU INTEL THẾ HỆ 11, DẪN ĐẦU XU HƯỚNG CÔNG NGHỆ
                        </span>
                    </h3>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">
                            Aspire 5 A515 là laptop đầu tiên tích hợp CPU Intel thế hệ 11 Tiger Lake với sức mạnh xử lý mạnh mẽ hơn 20% so với thế hệ trước. Với hiệu năng vượt trội đáng mong đợi này, bạn có thể tự tin khai thác mọi tính năng đáp ứng cho hành trình của riêng mình.
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14pt;">
                            <img src="images/laptop-acer-aspire-5-7.jpeg" alt="Laptop Acer Aspire 5 1" width="1275" height="750">
                        </span>
                    </p>
                    <h3 style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            KHẢ NĂNG XỬ LÝ VƯỢT TRỘI
                        </span>
                    </h3>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">
                            Với phiên bản cấu hình có khả năng nâng cấp tối đa Ram lên đến 20GB RAM, card màn hình rời mới nhất Intel iris XE hoặc NVIDIA GeForce MX450 cực mạnh, việc chơi các game không đòi hỏi cao về cấu hình hay sử dụng các phần mềm thiết kế căn bản, render video đơn giản sẽ không làm khó được Aspire 5 2020.
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14pt;">
                            <img src="images/laptop-acer-aspire-5-4.jpeg" alt="Laptop Acer Aspire 5 1" width="1275" height="750">
                        </span>
                    </p>
                    <h3 style="text-align: justify;">
                        <span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">
                            PHONG CÁCH TỐI GIẢN, CÁ TÍNH
                        </span>
                    </h3>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">
                            Viền màn hình của <strong>Aspire 5 A515</strong> cũng đã được làm mỏng (chỉ 6.3 mm) đúng với xu hướng thiết kế hiện nay, cho không gian làm việc rộng rãi hơn trước. Với độ phân giải Full HD trên tấm nền IPS, Aspire 5 càng làm mãn nhãn người dùng hơn với độ hiển thị màu sắc chân thực trong các điều kiện môi trường ánh sáng khác nhau, mang lại trải nghiệm xem thăng hoa hơn.
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14pt;">
                            <img src="images/laptop-acer-aspire-5-5.jpeg" alt="Laptop Acer Aspire 5 1" width="1275" height="750">
                        </span>
                    </p>
                </div>
            </div> -->
    </div>
</section>
<!-- <section class="product-related">
        <div class="product-related-title">
            <h1>SẢN PHẨM LIÊN QUAN</h1>
        </div>
        <div class="product--content row">
            <div class="p-item" style="width: 255px;">
                <img src="images/img22.png" alt="">
                <h1 class="p-sku" style="font-size: 12px;">Mã SP : TBAS0019</h1>
                <a href="" class="p-name">Vỏ case XTECH Gaming G340 ATX- 4 Fan RGB</a>
                <div class="price-container">
                    <del class="p-old-price"> 1.990.000 đ </del>
                    <span class="p-discount"> -20% </span>
                    <span class="p-price"> 1.190.000 đ </span>
                </div>
            </div>
            <div class="p-item" style="width: 255px;">
                <img src="images/img26.png" alt="">
                <h1 class="p-sku" style="font-size: 12px;">Mã SP : TBAS0019</h1>
                <a href="" class="p-name">Vỏ case XTECH Gaming G340 ATX- 4 Fan RGB</a>
                <div class="price-container">
                    <del class="p-old-price"> 1.990.000 đ </del>
                    <span class="p-discount"> -20% </span>
                    <span class="p-price"> 1.190.000 đ </span>
                </div>
            </div>
            <div class="p-item" style="width: 255px;">
                <img src="images/img20.png" alt="">
                <h1 class="p-sku" style="font-size: 12px;">Mã SP : TBAS0019</h1>
                <a href="" class="p-name">Vỏ case XTECH Gaming G340 ATX- 4 Fan RGB</a>
                <div class="price-container">
                    <del class="p-old-price"> 1.990.000 đ </del>
                    <span class="p-discount"> -20% </span>
                    <span class="p-price"> 1.190.000 đ </span>
                </div>
            </div>
            <div class="p-item" style="width: 255px;">
                <img src="images/img24.png" alt="">
                <h1 class="p-sku" style="font-size: 12px;">Mã SP : TBAS0019</h1>
                <a href="" class="p-name">Vỏ case XTECH Gaming G340 ATX- 4 Fan RGB</a>
                <div class="price-container">
                    <del class="p-old-price"> 1.990.000 đ </del>
                    <span class="p-discount"> -20% </span>
                    <span class="p-price"> 1.190.000 đ </span>
                </div>
            </div>
            
        </div>
    </section>    -->
<!----content-end---------->
<?php
include 'footer.php';
?>
<!---------end--- footer-->