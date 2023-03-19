<?php
require '../CauHinh/database.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$fullname = $_POST['fullname'];
$Email = $_POST['Email'];

$error ='';
// Function to validate user login
$password = md5($password); // Hash the password using bcrypt
if ($password  != $repassword) {
    $error = 'Mật khẩu không trùng nhau';
    header('Location: ../Front-End/signup.php?error=' . urldecode($error));
}

//$password = password_hash($password, PASSWORD_DEFAULT); // Hash the password using bcrypt

$sql = "select *from thanhvien where TaiKhoan = '$username'";
if ($connection != null) {
    try {
        $statement = $connection->prepare($sql);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            $error = "Tai khoan da ton tai";
            header('Location: ../Front-End/signup.php?error=' . urldecode($error));
        } else {
            $sql = "insert into thanhvien (TaiKhoan, MatKhau, HoTen, Email, MaLoaiTV, DaXoa) values ('$username', '$password', '$fullname', '$Email',1, 0)";

            if ($connection != null) {
                try {
                    $statement = $connection->prepare($sql);
                    $statement->execute();
                    if ($statement->rowCount() > 0)
                        header('Location: ../Front-End/login.php');
                } catch (PDOException $e) {
                    echo "Cannot query database";
                }
            }
        }
    } catch (PDOException $e) {
        echo "Cannot query database";
    }
}
