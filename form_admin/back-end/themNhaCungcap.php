<?php
 require '../../CauHinh/database.php';
    $TenNCC= $_POST['TenNCC'] ??'';
    $Email= $_POST['Email'] ??'';
    $DiaChi= $_POST['DiaChi'] ??'';
    $SDT= $_POST['SDT'] ??'';
   

$sql = "INSERT INTO `nhacungcap`(`TenNCC`, `DiaChi`, `Email`, `SDT`) VALUES ('$TenNCC','$DiaChi','$Email','$SDT')";
if ($connection != null) {
  try {
    $statement = $connection->prepare($sql);
    $statement->execute();
    if($statement -> rowCount() >0)
        header('Location: ../Admin/NhaCungCap.php');
  } catch (PDOException $e) {
    echo "Cannot query database";
  }
}
?>