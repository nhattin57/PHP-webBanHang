<?php
    require '../CauHinh/database.php';


    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
// Function to validate user login
$sql = "SELECT * FROM thanhvien WHERE TaiKhoan='$username' AND MatKhau='$password'";

if($connection != null){
try{
    $statement = $connection ->prepare($sql);
    $statement->execute();
    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
    $thanhviens = $statement->fetchAll();
    if ($statement->rowCount() > 0) {
        // The statement has data djd
        foreach($thanhviens as $thanhvien) {
            $HoTen = $thanhvien['HoTen'] ??'';
            $MaLoaiTV = $thanhvien['MaLoaiTV'] ??'';
            $MaThanhVien = $thanhvien['MaThanhVien'] ??'';
            $Email = $thanhvien['Email'] ??'';
            if($MaLoaiTV ==3){
                $_SESSION['admin'] = array(
                    'username' => $HoTen,
                    'loggedin' => true,
                    'MaLoaiTV' => $MaLoaiTV,
                    'MaThanhVien' => $MaThanhVien,
                    'Email' => $Email
                  );
                  //print_r($_SESSION['admin']); return;
                  header('Location: ../form_admin/Admin/index.php');
            } else{
                $_SESSION['user'] = array(
                    'username' => $HoTen,
                    'loggedin' => true,
                    'MaLoaiTV' => $MaLoaiTV,
                    'MaThanhVien' => $MaThanhVien,
                    'Email' => $Email
                  );
                  header('Location: ../Front-end/index.php');
            }
                
           
        }
    } else {
        // The statement doesn't have data
        $error_message = "Sai tài khoản hoặc mật khẩu";
        header("Location: ../Front-end/login.php?error_message=" . urlencode($error_message));
    }
    
    }catch(PDOException $e){
        echo "Cannot query database";
    }  
}

?>