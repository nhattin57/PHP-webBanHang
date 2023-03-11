<?php
require '../CauHinh/database.php';

session_start();

$TaiKhoan = $_POST['TaiKhoan'];
$password = $_POST['MatKhau'];
$password2 = $_POST['NhaplaiMatKhau'];

$error;
// Function to validate user login
//$hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password using bcrypt
if ($password  != $password2) {
    $error = 'Mat khau khong trung nhau';
    header('Location: ../Front-End/signup.php?error=' . urldecode($error));
    exit;
}
$password = password_hash($password, PASSWORD_DEFAULT); // Hash the password using bcrypt

$sql = "select *from thanhvien where TaiKhoan = '$TaiKhoan'";
if ($connection != null) {
    try {
        $statement = $connection->prepare($sql);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            $error = "Tai khoan da ton tai";
            header('Location: ../Front-End/signup.php?error=' . urldecode($error));
        } else {
            $sql = "insert into thanhvien (TaiKhoan, MatKhau) values ('$TaiKhoan', '$password')";

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
