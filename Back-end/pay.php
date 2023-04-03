<?php
    require '../CauHinh/database.php';
    session_start();

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $dateTime = new DateTime('now');
    $NgayDat = $dateTime->format("Y-m-d H:i:s");
    
    if(!isset($_SESSION['user'])){
        header("location: ../Front-end/login.php");
    } else{
        
        $MaTV = intval($_SESSION['user']['MaThanhVien']);
        $HoTen = $_SESSION['user']['username'];
        $Email = $_SESSION['user']['Email'];
        $SDT = $_GET['SDT'];
        $DiaChi = $_GET['DiaChi'];
        $TongTien = $_GET['TongTien'];
       
    $sql = "insert into dondathang (NgayDat, TinhTrangGiaoHang, DaThanhToan, MaTV,TongTien ) values ('$NgayDat', 0, 0, $MaTV, $TongTien)";

    if ($connection != null) {
        try {
            $statement = $connection->prepare($sql);
            $statement->execute();
            //$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
            if ($statement->rowCount() > 0) {
                $MaDDH = $connection->lastInsertId();
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $MaSP = $value['MaSP'];
                        $SoLuong = $value['SoLuong'];
                        $TenSP = $value['TenSP'];
                        $DonGia = $value['DonGia'];

                        $sql = "insert into chitietdondathang (MaDDH , MaSP, TenSP, SoLuong, DonGia ) values
                         ('$MaDDH', '$MaSP', '$TenSP', '$SoLuong', '$DonGia')";
                         try{
                            $statement = $connection->prepare($sql);
                            $statement->execute();
                         }catch(PDOException $e) {
                            echo "Cannot query database with column chitietdondathang";
                        }
                        
                    }
                    unset($_SESSION['cart']);

                    $sql = "UPDATE `thanhvien` SET `DiaChi`='$DiaChi',`SoDienThoai`='$SDT' WHERE `MaThanhVien` =$MaTV";

                  
                     try{
                        $statement = $connection ->prepare($sql);
                        $statement->execute();
                        } 
                        catch(PDOException $e){
                            echo "Cannot query database update thanhvien";
                        }  
                    
                    header('location: ../Front-end/index.php?message='.urldecode('<script>alert(`Thanh toán thành công !`) </script>'));
                    
              }

            } 
         catch (PDOException $e) {
            echo "Cannot query database";
        }
    }
    

    //header("location: ../Front-end/index.php");
}
    

?>