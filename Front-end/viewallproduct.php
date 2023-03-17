<?php
require 'header.php';
        $MaLoaiSP;
        if(isset($_GET['MaLoaiSP']))
            $MaLoaiSP = $_GET['MaLoaiSP'];
            $recordsPerPage = 8;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $offset = ($page - 1) * $recordsPerPage;
            $sql = "Select * from `sanpham` where DaXoa =1 AND MaLoaiSP = $MaLoaiSP";
            $totalRecords;
            if($connection != null){
                try{
                    $statement = $connection ->prepare($sql);
                    $statement->execute();
                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $sanphams = $statement->fetchAll();
                    $totalRecords = count($sanphams); // assuming $sanphams is an array of all products for the given category
                    }catch(PDOException $e){
                        echo "Cannot query database";
                    }  
                }
?>
<!----end-menu----------->

<!----content----------->
<section class="product">
    <div class="containers">
<?php
   
                  $TenLoaiSP;

                    $sql = $sql = "SELECT MaSP, TenSP, DonGia, CauHinh, HinhAnh FROM `sanpham` WHERE MaLoaiSP = $MaLoaiSP AND DaXoa=1 ORDER BY NgayCapNhap DESC LIMIT $recordsPerPage OFFSET $offset";
                    switch ($MaLoaiSP) {
                        case 1:
                            $TenLoaiSP = 'Điện Thoại';
                            break;
                        case 2:
                            $TenLoaiSP = 'LapTop';
                            break;
                        case 3:
                            $TenLoaiSP = 'Máy tính bảng';
                            break;
                        case 4:
                            $TenLoaiSP = 'Phụ Kiện';
                            break;
                        default:
                            $TenLoaiSP = '';
                    }
                    echo '<section class="container">'; //1sec //done
                        echo '<div class="home-pro-hot box-pro-container bg-white pb-2">'; //1div //done
                                echo '<div class="box-title-container">
                                            <h2 class="box-title">'.$TenLoaiSP.'</h2>
                                     </div>';
                        echo '<div class="p-container" style="min-height: 700px">'; //1div //done
                            echo '<div class="d-flex flex-wrap">'; //1div //done
                            if($connection != null){
                                try{
                                    $statement = $connection ->prepare($sql);
                                    $statement->execute();
                                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                                    $sanphams = $statement->fetchAll();
                                    $totalPages = ceil($totalRecords / $recordsPerPage);
                                    
                                    if ($statement->rowCount() > 0) {
                                        // The statement has data
                                        foreach($sanphams as $sanpham) {
                                            $MaSP = $sanpham['MaSP'] ??'';
                                            $TenSP = $sanpham['TenSP'] ??'';
                                            $DonGia = $sanpham['DonGia'] ??'';
                                            $CauHinh = $sanpham['CauHinh'] ??'';
                                            $HinhAnh = $sanpham['HinhAnh'] ??'';
                                           echo '<div class="p-item">'; //1div
                                                echo '<a href="../Front-end/product.php?MaSP='.$MaSP.'"><img src="../HinhAnh/'.$HinhAnh.'" alt=""></a>';
                                                echo '<h1 class="p-sku" style="font-size: 12px;"> Mã SP : '.$MaSP.' </h1>';
                                                echo '<a href="../Front-end/product.php?MaSP='.$MaSP.'" class="p-name">'.$CauHinh.'</a>';
                                                echo '<div class="price-container">';
                                                        echo '<del class="p-old-price"> '.number_format($DonGia, 0, '', ',').' đ </del>';
                                                        echo '<span class="p-discount"> -20% </span>';
                                                        echo '<span class="p-price"> '.number_format($DonGia, 0, '', ',').' đ </span>';
                                                echo '</div>';
                                           echo '</div>';
                                        }
                                        echo '</div>';
                                    echo '</div>';
                                   //paging here
                                   echo '<div class="pagination">';
                                    for ($i = 1; $i <= $totalPages; $i++) {
                                        if ($i == $page) {
                                            echo "<span class='current'>$i</span>";
                                        } else {
                                            echo "<a href='viewallProduct.php?MaLoaiSP=$MaLoaiSP&page=$i'>$i</a>";
                                        }
                                    }
                                    echo '</div>';
                                echo '</div>';
                            echo '</section>';
                        
                                    } else {
                                        // The statement doesn't have data
                                        echo "No data or query wrong";
                                    }
                                    
                                    }catch(PDOException $e){
                                        echo "Cannot query database";
                                    }  
                                }     


?>
    </div>
</section>
<!----content-end---------->
<?php
include 'footer.php';
?>
<!---------end--- footer-->