<?php
 require '../../CauHinh/database.php';
    $TenNSX= $_GET['TenNSX'] ??'';
    $ThongTin= $_GET['ThongTin'] ??'';
   
   

$sql = "INSERT INTO `nhasanxuat`(`TenNSX`, `ThongTin`) VALUES ('$TenNSX','$ThongTin')";
if ($connection != null) {
  try {
    $statement = $connection->prepare($sql);
    $statement->execute();
    if($statement -> rowCount() >0)
        header('Location: ../Admin/NhaSanXuat.php');
  } catch (PDOException $e) {
    echo "Cannot query database";
  }
}
?>