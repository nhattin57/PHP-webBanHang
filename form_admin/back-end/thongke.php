<?php
    //require '../../CauHinh/database.php';

$SoLuongTV =0;
$SoLuongSanPhamHetHang =0;
$SoLuongDonDatHang =0;
$SoLuongSanPham =0;
$sql = "SELECT * FROM thanhvien WHERE  DaXoa= 0 ";
if($connection != null){
try{
    $statement = $connection ->prepare($sql);
    $statement->execute();
    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
    $thanhviens = $statement->fetchAll();
    $SoLuongTV =  count($thanhviens);
    }catch(PDOException $e){
        echo "Cannot query database";
    }  
}

$sql = "SELECT * FROM dondathang ";

if($connection != null){
try{
    $statement = $connection ->prepare($sql);
    $statement->execute();
    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
    $dondathangs = $statement->fetchAll();
    $SoLuongDonDatHang =  count($dondathangs);
    }catch(PDOException $e){
        echo "Cannot query database";
    }  
}

$sql = "SELECT * FROM sanpham where DaXoa =0 AND SoLuongTon =0";


if($connection != null){
try{
    $statement = $connection ->prepare($sql);
    $statement->execute();
    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
    $sanphams = $statement->fetchAll();
    $SoLuongSanPhamHetHang =  count($sanphams);
    }catch(PDOException $e){
        echo "Cannot query database";
    }  
}

$sql = "SELECT * FROM sanpham where DaXoa =0 ";


if($connection != null){
try{
    $statement = $connection ->prepare($sql);
    $statement->execute();
    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
    $sanphams = $statement->fetchAll();
    $SoLuongSanPham =  count($sanphams);
    }catch(PDOException $e){
        echo "Cannot query database";
    }  
}
?>




?>

