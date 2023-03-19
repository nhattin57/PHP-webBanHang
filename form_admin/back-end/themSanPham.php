<?php
    $error_message;

    if(isset($_POST['submit'])){
        $permitted_extensions =['png','jpg','jpeg','gif'];
        $file_name = $_FILES['ImageUpload']['name'];
        if(!empty($_FILES['ImageUpload']['name'])){
            print_r($_FILES);
            $file_size = $_FILES['ImageUpload']['size'];
            $file_tmp_name = $_FILES['ImageUpload']['tmp_name'];
            $generated_filename = time().'-'.$file_name;
            $destional_path = "../../HinhAnh/$generated_filename";

            $layDuoiFile = explode('.', $file_name);
            $layDuoiFile = strtolower(end($layDuoiFile));
            echo "$file_name, $file_size, $destional_path, $layDuoiFile";
            return;
            if(in_array($layDuoiFile, $permitted_extensions)){
                if($file_size <= 1000000){
                    // move to foler 
                    //print_r($_FILES);
                    move_uploaded_file($file_tmp_name,$destional_path);
                }else{
                    $error_message =' Anh qua lon';
                }
            }else{
                $error_message ='file ko hop le';

            }

        } else {
            $error_message =
            '<p style= "color=red">no file selected </p>';
        }
    }
    $TenSP = $_GET['TenSP'];
    $SoLuongNhap = $_GET['SoLuongNhap'];
    $MaLoaiSP = $_GET['MaLoaiSP'];
    $MaNCC = $_GET['MaNCC'];
    $mota = $_GET['mota'];
    $DonGia = $_GET['DonGia'];
?>