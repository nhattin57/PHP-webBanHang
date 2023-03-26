<?php
    require 'header.php';
    //session_start();
    $totalMoney = 0;
    if (isset($_SESSION['cart'])){
        echo ' <section class="cart">
        <div class="containers">
            <div class="cart-top row">
                <p><a href="index.html">Trang chủ</a></p><span>&#62;</span><p>Giỏ hàng</p>
            </div>
        </div>
        <div class="cart-title">
            <h1>Giỏ hàng</h1>
        </div>
        <div class="cart-content row">
            <div class="cart-content-left row">
                <div class="cart-header-left row">
                    <div class="cart-header-left-product">
                        <span>Sản phẩm</span>
                    </div>
                    <div class="cart-header-left-price">
                        Đơn giá
                    </div>
                    <div class="cart-header-left-quantity">
                        Số lượng
                    </div>
                    <div class="cart-header-left-total-price">
                        Thành tiền
                    </div>
                    <div class="cart-header-left-delete">
                        Xóa
                    </div>
                </div>';
        foreach ($_SESSION['cart'] as $key => $value) {
           $MaSP = $value['MaSP'];
           $SoLuong = $value['SoLuong'];
            $sql = 'select TenSP, DonGia, CauHinh, MaLoaiSP,HinhAnh FROM `sanpham` WHERE MaSP =' . $MaSP;
           
        if ($connection != null) {
            try {
                $statement = $connection->prepare($sql);
                $statement->execute();
                $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                $sanphams = $statement->fetchAll();
                if ($statement->rowCount() > 0) {
                    // The statement has data 
                        foreach ($sanphams as $sanpham) {
                            $TenSP = $sanpham['TenSP'] ?? '';
                            $DonGia = $sanpham['DonGia'] ?? '';
                            $CauHinh = $sanpham['CauHinh'] ?? '';
                            $MaLoaiSP = $sanpham['MaLoaiSP'] ?? '';
                            $CauHinh = $sanpham['CauHinh'] ?? '';
                            $HinhAnh = $sanpham['HinhAnh'] ?? '';
                            $ThanhTien = $SoLuong * $DonGia;
                            $totalMoney += $ThanhTien;
                            
                            echo ' <div class="cart-list-item">
                            <div class="cart-list-item-new row">
                                <div class="cart-header-left-product row">
                                    <img src="../HinhAnh/'.$HinhAnh.'" alt="" class="cart-header-left-product-img">
                                    <div class="cart-header-left-product-info">
                                        <a href="#" class="cart-header-left-product-info-name">
                                        '.$TenSP.'
                                        </a>
                                        <span class="cart-header-left-product-info-sku">
                                            '.$MaSP.'
                                        </span>
                                    </div>
                                </div>
                                <div class="cart-header-left-price">
                                    <span class="cart-item-price">'.number_format($DonGia, 0, '', ',').' đ</span>
                                    <span class="cart-item-old-price">'.number_format($DonGia, 0, '', ',').' đ</span>
                                </div>
                                <div class="cart-header-left-quantity">
                                <form action="../Back-end/cartAction.php" method ="GET">
                                            <input type="number" name ="SoLuong" value = "'.$SoLuong.'">
                                            <input type="hidden" name = "MaSP" value ="'.$MaSP.'">
                                            <input type="hidden" name = "action" value ="capnhat">
                                            <input type="submit" value = "Sửa">
                                </form>
                                </div>
                                <div class="cart-header-left-total-price">
                                    <b class="cart-item-prices">'.number_format($DonGia * (int)$SoLuong, 0, '', ',').'</b>
                                    <b style="font-size: 16px;color: #ee2724;">đ</b>
                                </div>
                                <div class="cart-header-left-delete">
                                    <a class="fa fa-trash" onclick ="return confirm(`Bạn có muốn xóa không`);" href="../Back-end/cartAction.php?MaSP='.$MaSP.'"></a>
                                </div>
                            </div>
                        </div>';
                        }
                        
                   
                }
                
                 else {
                    // The statement doesn't have data
                    echo "No data";
                    
                }
                
            } catch (PDOException $e) {
                echo "Cannot query database";
            }
        }
      
    }
   echo ' </div>  
   <div class="cart-content-right">
   <form action ="../Back-end/pay.php" method ="GET">
        
       <div class="cart-box-total-price row">
           <p>
               <span>Tạm tính:</span>
               <span class="total-cart-price">'.number_format($totalMoney, 0, '', ',').' đ</span>
           </p>
           <p>
               <span>Thành tiền:</span>
               <span class="red-b total-cart-payment">'.number_format($totalMoney, 0, '', ',').' đ</span>
           </p>
           <span class="cart-vat">(Đã bao gồm VAT nếu có)</span>
       </div>
       <div style = "padding-top:10px;">
            <p>SDT </p>
            <input class = "infor" min="10" name = "SDT"  required type="number">
            <p>Địa chỉ </p>
            <input class = "infor" name ="DiaChi" required type="text">
            <input  name ="TongTien" required type="hidden" value = "'.$totalMoney.'">

        </div>
       
       <input  required class="button-buy-summit-cart" type="submit" value ="Thanh Toán">
           
     
   </div>
   </form>
</div>

</section>';
    }else{
        header('location: ./index.php');
    }
    include 'footer.php';
    ?>