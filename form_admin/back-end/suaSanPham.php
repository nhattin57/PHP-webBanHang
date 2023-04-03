<?php
    require '../../CauHinh/database.php';
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTime = new DateTime('now');
    $NgayCapNhap = $dateTime->format("Y-m-d H:i:s");
   
    $error_message;
    $MaSP =(int)$_POST['MaSP'];
    $TenSP = $_POST['TenSP'];
    $SoLuongNhap = (int)$_POST['SoLuongNhap'];
    $MaLoaiSP = (int)$_POST['MaLoaiSP'];
    $MaNCC = (int)$_POST['MaNCC'];
    $MaNSX = (int)$_POST['MaNSX'];
    $CauHinh = $_POST['CauHinh'];
    $DonGia =  (floatval($_POST['DonGia']));
    $HinhAnh;
    
                    $permitted_extensions =['png','jpg','jpeg','gif'];
                    $file_name = $_FILES['ImageUpload']['name'];
                    if(!empty($_FILES['ImageUpload']['name'])){
                        //print_r($_FILES);
                        $file_size = $_FILES['ImageUpload']['size'];
                        $file_tmp_name = $_FILES['ImageUpload']['tmp_name'];
                        $generated_filename = time().'-'.$file_name;
                        $destional_path = "../../HinhAnh/$generated_filename";
                        $HinhAnh = $generated_filename;
                        $layDuoiFile = explode('.', $file_name);
                        $layDuoiFile = strtolower(end($layDuoiFile));
                    
                        
                        if(in_array($layDuoiFile, $permitted_extensions)){
                            if($file_size <= 1000000){
                                if($connection != null){
                                    $sql = "UPDATE sanpham SET TenSP = '$TenSP', HinhAnh = '$HinhAnh', SoLuongTon = $SoLuongNhap ,DonGia = $DonGia, CauHinh='$CauHinh' ,
                                     MaNCC =$MaNCC, MaNSX =$MaNSX, MaLoaiSP =$MaLoaiSP, NgayCapNhap='$NgayCapNhap' WHERE MaSP =$MaSP";
                                   try{
                                       $statement = $connection ->prepare($sql);
                                       $statement->execute();
                                       if($statement->rowCount() > 0){
                                           header('location: ../Admin/QuanLySanPham.php');
                                       }
                                      
                                       }catch(PDOException $e){
                                           echo "Cannot query database";
                                       }  
                                   
                                }
                                // move to foler 
                                move_uploaded_file($file_tmp_name,$destional_path);
                            }else{
                                $error_message =' Anh qua lon';
                                header('location: ../Admin/chinhSuaSP.php?MaSP='.$MaSP.'&error='.$error_message);
                                
                            }
                        }else{
                            $error_message ='file ko hop le';
                            header('location: ../Admin/chinhSuaSP.php?MaSP='.$MaSP.'&error='.$error_message);
                            
                        }
            
                    } else {
                        if($connection != null){
                                    $sql = "UPDATE sanpham SET TenSP = '$TenSP', SoLuongTon = $SoLuongNhap ,DonGia = $DonGia, CauHinh='$CauHinh' ,
                                     MaNCC =$MaNCC, MaNSX =$MaNSX, MaLoaiSP =$MaLoaiSP, NgayCapNhap='$NgayCapNhap' WHERE MaSP =$MaSP";
                                   try{
                                       $statement = $connection ->prepare($sql);
                                       $statement->execute();
                                       if($statement->rowCount() > 0){
                                           header('location: ../Admin/QuanLySanPham.php');
                                       }
                                      
                                       }catch(PDOException $e){
                                           echo "Cannot query database";
                                       }  
                                   
                                }
                            
                    }
                
            
       

    
    
    
    


?>