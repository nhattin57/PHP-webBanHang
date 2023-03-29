<?php
    require '../../CauHinh/database.php';
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTime = new DateTime('now');
    $NgayCapNhap = $dateTime->format("Y-m-d H:i:s");

    $error_message;
    $TenSP = $_POST['TenSP'];
    $SoLuongNhap = (int)$_POST['SoLuongNhap'];
    $MaLoaiSP = (int)$_POST['MaLoaiSP'];
    $MaNCC = (int)$_POST['MaNCC'];
    $MaNSX = (int)$_POST['MaNSX'];
    $CauHinh = $_POST['CauHinh'];
    $DonGia =  (floatval($_POST['DonGia']));
    $HinhAnh;
    
    if(isset($_POST['submit'])){
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
                    // move to foler 
                    move_uploaded_file($file_tmp_name,$destional_path);
                }else{
                    header('location: ../Admin/form-add-san-pham.php');
                    $error_message =' Anh qua lon';
                }
            }else{
                header('location: ../Admin/form-add-san-pham.php');
                $error_message ='file ko hop le';

            }

        } else {
            $error_message =
            '<p style= "color=red">no file selected </p>';
        }
    }
    
$sql = "INSERT INTO sanpham ( TenSP, DonGia, NgayCapNhap, HinhAnh, SoLuongTon, CauHinh, Moi, MaNCC, MaNSX, MaLoaiSP, DaXoa)
 VALUES ('$TenSP',$DonGia,'$NgayCapNhap','$HinhAnh',$SoLuongNhap, '$CauHinh', 1, $MaNCC, $MaNSX, $MaLoaiSP, 0)";

if($connection != null){
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

?>