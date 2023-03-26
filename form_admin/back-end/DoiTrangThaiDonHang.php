<?php
 require '../../CauHinh/database.php';
    $TinhTrang= (int)$_GET['TinhTrang'] ??'';
    $MaDDH = $_GET['MaDHH'] ?? 00;
    // var_dump($TinhTrang);
    // var_dump($MaDDH);
    // return;
    if($TinhTrang ==1){
        $sql = "UPDATE `dondathang` SET TinhTrangGiaoHang=0, DaThanhToan =0 WHERE MaDDH = $MaDDH";
        if ($connection != null) {
            try {
                $statement = $connection->prepare($sql);
                $statement->execute();
                if ($statement->rowCount() > 0)
                    header('Location: ../Admin/index.php');
            } catch (PDOException $e) {
                echo "Cannot query database";
            }
        }
    }else if($TinhTrang ==2) {
        $sql = "UPDATE `dondathang` SET TinhTrangGiaoHang=1, DaThanhToan =0 WHERE MaDDH = $MaDDH";
        if ($connection != null) {
            try {
                $statement = $connection->prepare($sql);
                $statement->execute();
                if ($statement->rowCount() > 0)
                    header('Location: ../Admin/index.php');
            } catch (PDOException $e) {
                echo "Cannot query database";
            }
        }
    } else{
        $sql = "UPDATE `dondathang` SET TinhTrangGiaoHang=1, DaThanhToan =1 WHERE MaDDH = $MaDDH";
        if ($connection != null) {
            try {
                $statement = $connection->prepare($sql);
                $statement->execute();
                if ($statement->rowCount() > 0)
                    header('Location: ../Admin/index.php');
            } catch (PDOException $e) {
                echo "Cannot query database";
            }
        }
    }
   
   


?>