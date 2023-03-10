<?php
    require '../CauHinh/database.php';


    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

// Function to validate user login
$sql = "SELECT * FROM thanhvien WHERE TaiKhoan='$username' AND MatKhau='$password'";

if($connection != null){
try{
    $statement = $connection ->prepare($sql);
    $statement->execute();
    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
    $thanhviens = $statement->fetchAll();
    if ($statement->rowCount() > 0) {
        // The statement has data
        foreach($thanhviens as $thanhvien) {
            $HoTen = $thanhvien['HoTen'] ??'';
            $MaLoaiTV = $thanhvien['MaLoaiTV'] ??'';
            $MaThanhVien = $thanhvien['MaThanhVien'] ??'';
                $_SESSION['user'] = array(
                    'username' => $HoTen,
                    'loggedin' => true,
                    'MaLoaiTV' => $MaLoaiTV,
                    'MaThanhVien' => $MaThanhVien
                  );
                  header('Location: ../Front-end/index.php');
           
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