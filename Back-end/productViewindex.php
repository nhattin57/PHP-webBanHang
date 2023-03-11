<?php
       

        $sql =' SELECT * FROM `loaisanpham`';
            if($connection != null){
                try{
                    $statement = $connection ->prepare($sql);
                    $statement->execute();
                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $loaisanphams = $statement->fetchAll();
                    if ($statement->rowCount() > 0) {
                        // The statement has data ??
                        foreach($loaisanphams as $loaisanpham) {
                            $MaLoaiSP = $loaisanpham['MaLoaiSP'] ??'';
                            $TenLoaiSP = $loaisanpham['TenLoai'] ??'';

                            $sql = 'SELECT MaSP, TenSP, DonGia, CauHinh,HinhAnh FROM `sanpham` WHERE MaLoaiSP = '.$MaLoaiSP.' 
                            ORDER BY NgayCapNhap DESC LIMIT 8';

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
                                            echo '<a href="" class="view-all">XEM TẤT CẢ SẢN PHẨM</a>';
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
                        }
                    } else {
                        header("Location: ../Front-end/index.php");
                    }
                    
                    }catch(PDOException $e){
               echo "Cannot query database";
             }  
          }

        

    ?>
