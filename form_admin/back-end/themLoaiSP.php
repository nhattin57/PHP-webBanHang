<?php
 require '../../CauHinh/database.php';
    $TenLoaiSP= $_GET['TenLoai'] ??'';
    $BiDanh = $_GET['BiDanh'] ??'';

$sql = "INSERT INTO `loaisanpham`( `TenLoai`,  `BiDanh`) VALUES ('$TenLoaiSP','$BiDanh')";
if ($connection != null) {
  try {
    $statement = $connection->prepare($sql);
    $statement->execute();
    if($statement -> rowCount() >0)
        header('Location: ../Admin/form-add-san-pham.php');
  } catch (PDOException $e) {
    echo "Cannot query database";
  }
}
?>