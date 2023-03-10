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
    $feedbacks = $statement->fetchAll();
    if ($statement->rowCount() > 0) {
        // The statement has data
        foreach($feedbacks as $feedback) {
            $HoTen = $feedback['HoTen'] ??'';
            $MaLoaiTV = $feedback['MaLoaiTV'] ??'';
                $_SESSION['user'] = array(
                    'username' => $HoTen,
                    'loggedin' => true,
                    'MaLoaiTV' => $MaLoaiTV
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