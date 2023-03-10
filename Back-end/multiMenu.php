
<?php
    //require '../CauHinh/database.php'; 
            $sql = "SELECT * FROM `loaisanpham`";

            if($connection != null){
                try{
                    $statement = $connection ->prepare($sql);
                    $statement->execute();
                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $feedbacks = $statement->fetchAll();
                    //echo $feedbacks[1]['MaLoaiSP'];
                    
                    if ($statement->rowCount() > 0) {
                        // The statement has data
                        foreach($feedbacks as $feedback) {
                            $maLoaiSP = $feedback['MaLoaiSP'] ??'';
                            $tenLoaiSP = $feedback['TenLoai'] ??'';
                            echo '<li><a href="">'.$tenLoaiSP.'</a>
                            ';
                            
                            $sql = 'SELECT b.MaNSX, b.TenNSX FROM `sanpham` a, `nhasanxuat` b WHERE MaLoaiSP ='.$maLoaiSP.' and a.MaNSX = b.MaNSX GROUP BY MaNSX';
                            echo '<ul class="sub-menu">';
                            try{
                                $statement = $connection ->prepare($sql);
                                $statement->execute();
                                $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                                $feedbacks1 = $statement->fetchAll();
                                //print_r($feedbacks1);
                                if ($statement->rowCount() > 0) {
                                    foreach($feedbacks1 as $feedback2) {
                                        //print_r($feedback2);
                                        $maNSX = $feedback2['MaNSX'];
                                        $tenNSX= $feedback2['TenNSX'];
                                        echo '<li><i class="fa fa-laptop"></i><a href="">'.$tenNSX.'</a></li>';
                                    }
                                    echo '</ul>';
                                }
                                echo '</li>';

                            }catch(Exception $e){

                            }

                                  //header('Location: ../Front-end/index.php');
                        }
                    } else {
                        // The statement doesn't have data
                        header("Location: ../Front-end/index.php");
                    }
                    
                    }catch(PDOException $e){
                        echo "Cannot query database";
                    }  
                }
    ?>
    <li><a href="">BẢO HÀNH</a></li>
            <li><a href="">CHÍNH SÁCH - HƯỚNG DẪN</a></li>
                   
     </div>
