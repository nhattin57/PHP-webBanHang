<?php
    require '../CauHinh/database.php';
    session_start();

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTime = new DateTime('now');
    $NgayDat = $dateTime->format("Y-m-d H:i:s");
    
    if(!isset($_SESSION['user'])){
        header("location: ../Front-end/login.php");
    } else{

        $MaTV = $_SESSION['user']['MaThanhVien'];
        $HoTen = $_SESSION['user']['username'];
        $Email = $_SESSION['user']['Email'];
        $SDT = $_GET['SDT'];
        $DiaChi = $_GET['DiaChi'];
        
    $sql = "insert into dondathang (NgayDat, TinhTrangGiaoHang, DaThanhToan, MaTV ) values ('$NgayDat', 0, 0, $MaTV)";

    if ($connection != null) {
        try {
            $statement = $connection->prepare($sql);
            $statement->execute();
            $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
            $thanhvien = $statement->fetchAll();

            if ($statement->rowCount() > 0) {
                $MaDDH = $thanhvien['MaDDH'] ??'';
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $MaSP = $item['MaSP'];
                        $SoLuong = $value['SoLuong'];
                        $TenSP = $value['TenSP'];
                        $DonGia = $value['DonGia'];

                        $sql = "insert into chitietdondathang (MaDDH , MaSP, TenSP, SoLuong, DonGia ) values
                         ('$MaDDH', '$MaSP', '$TenSP', '$SoLuong', '$DonGia')";
                         $statement = $connection->prepare($sql);
                         $statement->execute();
                    }
                    echo "<script>alert(`Thanh toán thành công !`) </script>";
              }

            } 
         catch (PDOException $e) {
            echo "Cannot query database";
        }
    }

    //header("location: ../Front-end/index.php");
}
    //header("location: ../Front-end/pay.php");
?>