-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 22, 2023 lúc 05:11 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBL` int(11) NOT NULL,
  `NoiDungBL` text DEFAULT NULL,
  `MaThanhVien` int(11) DEFAULT NULL,
  `MaSP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdondathang`
--

CREATE TABLE `chitietdondathang` (
  `MaChiTietDDH` int(11) NOT NULL,
  `MaDDH` int(11) DEFAULT NULL,
  `MaSP` int(11) DEFAULT NULL,
  `TenSP` varchar(255) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` decimal(18,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdondathang`
--

INSERT INTO `chitietdondathang` (`MaChiTietDDH`, `MaDDH`, `MaSP`, `TenSP`, `SoLuong`, `DonGia`) VALUES
(5, 11, 14, 'iPhone 12 Pro)', 1, '28499000'),
(6, 11, 26, 'iPad Air 4 64GB 4G - Chính hãng VN)', 1, '17999000'),
(7, 11, 3, 'LAPTOP ACER ASPIRE A514-54-59QK', 2, '17799000'),
(8, 11, 44, 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X)', 1, '359000'),
(9, 12, 14, 'iPhone 12 Pro)', 1, '28499000'),
(10, 12, 26, 'iPad Air 4 64GB 4G - Chính hãng VN)', 1, '17999000'),
(11, 12, 3, 'LAPTOP ACER ASPIRE A514-54-59QK', 2, '17799000'),
(12, 12, 44, 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X)', 1, '359000'),
(13, 13, 18, 'Samsung Galaxy S22 Ultra 5G)', 1, '30499000'),
(14, 13, 26, 'iPad Air 4 64GB 4G - Chính hãng VN)', 1, '17999000'),
(15, 13, 3, 'LAPTOP ACER ASPIRE A514-54-59QK', 1, '17799000'),
(16, 13, 41, 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X)', 1, '359000'),
(17, 14, 14, 'iPhone 12 Pro)', 1, '28499000'),
(18, 15, 13, 'iPhone 12 Pro)', 2, '28499000'),
(19, 16, 13, 'iPhone 12 Pro)', 1, '28499000'),
(20, 17, 14, 'iPhone 12 Pro)', 1, '28499000'),
(21, 18, 14, 'iPhone 12 Pro)', 1, '28499000'),
(22, 19, 14, 'iPhone 12 Pro)', 2, '28499000'),
(23, 20, 14, 'iPhone 12 Pro)', 2, '28499000'),
(24, 21, 14, 'iPhone 12 Pro)', 1, '28499000'),
(25, 22, 18, 'Samsung Galaxy S22 Ultra 5G)', 2, '30499000'),
(26, 23, 12, 'iPhone 13 Pro Max 128GB)', 1, '31499000'),
(27, 23, 40, 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X)', 2, '359000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieunhap`
--

CREATE TABLE `chitietphieunhap` (
  `MaChiTietPN` int(11) NOT NULL,
  `MaPN` int(11) DEFAULT NULL,
  `MaSP` int(11) DEFAULT NULL,
  `DonGiaNhap` decimal(18,0) DEFAULT NULL,
  `SoLuongNhap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `MaDDH` int(11) NOT NULL,
  `NgayDat` datetime DEFAULT NULL,
  `TinhTrangGiaoHang` bit(1) DEFAULT NULL,
  `NgayGiao` datetime DEFAULT NULL,
  `DaThanhToan` bit(1) DEFAULT NULL,
  `MaTV` int(11) DEFAULT NULL,
  `UuDai` int(11) DEFAULT NULL,
  `TongTien` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`MaDDH`, `NgayDat`, `TinhTrangGiaoHang`, `NgayGiao`, `DaThanhToan`, `MaTV`, `UuDai`, `TongTien`) VALUES
(10, '2023-03-18 08:21:06', b'0', NULL, b'0', 6, NULL, '0'),
(11, '2023-03-18 08:22:26', b'0', NULL, b'0', 6, NULL, '0'),
(12, '2023-03-18 08:23:58', b'0', NULL, b'0', 6, NULL, '0'),
(13, '2023-03-18 08:26:26', b'0', NULL, b'0', 6, NULL, '0'),
(14, '2023-03-18 08:27:30', b'0', NULL, b'0', 6, NULL, '0'),
(15, '2023-03-18 08:30:28', b'0', NULL, b'0', 6, NULL, '0'),
(16, '2023-03-18 09:06:57', b'0', NULL, b'0', 6, NULL, '28499000'),
(17, '2023-03-18 14:01:06', b'1', NULL, b'0', 6, NULL, '28499000'),
(18, '2023-03-18 14:02:34', b'1', NULL, b'1', 6, NULL, '28499000'),
(19, '2023-03-18 14:21:37', b'0', NULL, b'0', 6, NULL, '56998000'),
(20, '2023-03-18 14:22:40', b'0', NULL, b'0', 6, NULL, '56998000'),
(21, '2023-03-18 14:24:40', b'0', NULL, b'0', 6, NULL, '28499000'),
(22, '2023-03-18 14:28:19', b'0', NULL, b'0', 6, NULL, '60998000'),
(23, '2023-03-18 14:32:18', b'0', NULL, b'0', 6, NULL, '32217000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(100) DEFAULT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(255) DEFAULT NULL,
  `LoaiThanhVien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSP` int(11) NOT NULL,
  `TenLoai` varchar(100) DEFAULT NULL,
  `Icon` varchar(255) DEFAULT NULL,
  `BiDanh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSP`, `TenLoai`, `Icon`, `BiDanh`) VALUES
(1, 'Điện Thoại', 'logo-dienthoai.png', 'Điện Thoại'),
(2, 'LapTop', 'logo-laptop.png', 'LapTop'),
(3, 'Máy Tính Bảng', 'logo-ipad.jpg', 'IPad'),
(4, 'Phụ Kiện', 'logo-phukien.jpg', 'accessory');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaithanhvien`
--

CREATE TABLE `loaithanhvien` (
  `MaLoaiTV` int(11) NOT NULL,
  `TenLoai` varchar(50) DEFAULT NULL,
  `UuDai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaithanhvien`
--

INSERT INTO `loaithanhvien` (`MaLoaiTV`, `TenLoai`, `UuDai`) VALUES
(1, 'Thường', 0),
(2, 'VIP', 10),
(3, 'admin', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` int(11) NOT NULL,
  `TenNCC` varchar(100) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `SDT` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `DiaChi`, `Email`, `SDT`) VALUES
(1, 'Nhật Tín', 'Tuy An- Phú Yên', 'nhattin57@gmail.com', '0384480806'),
(2, ' Văn Quang ', ' Đồng Nai ', ' quangheo @gmail.com ', ' 0357894165 '),
(3, ' Trung Thành ', ' Địa chỉ này chưa hỏi ', ' trungthanh @gmail.com ', ' 0123456789 '),
(4, ' Tiến Hoàng ', ' Yasuo Bắc Giang ', ' yasuobacgiang @gmail.com ', ' 0555888777 ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MaNSX` int(11) NOT NULL,
  `TenNSX` varchar(100) DEFAULT NULL,
  `ThongTin` varchar(255) DEFAULT NULL,
  `Logo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNSX`, `TenNSX`, `ThongTin`, `Logo`) VALUES
(1, 'ASUS', 'AMERICA', 'asus.png'),
(2, 'DELL', 'Anh', 'dell.png'),
(3, 'APPLE', 'AMERICA', 'apple.png'),
(4, 'MSI', 'AMERICA', 'MSI-logo.jpg'),
(5, 'LG', 'AMERICA', 'lg.png'),
(6, 'SamSung', 'Hàn Quốc', '882920db89984e5ccef142497653a170.jpg'),
(7, 'OPPO', 'AMERICA', 'OPPO-LOGO.png'),
(8, 'Ốp Lưng', 'AMERICA', 'abc'),
(9, 'Cáp sạc', 'AMERICA', 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `MaPN` int(11) NOT NULL,
  `MaNCC` int(11) DEFAULT NULL,
  `NgayNhap` datetime DEFAULT NULL,
  `DaXoa` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(255) DEFAULT NULL,
  `DonGia` decimal(10,0) DEFAULT NULL,
  `NgayCapNhap` datetime DEFAULT NULL,
  `CauHinh` varchar(255) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL,
  `SoLuongTon` int(11) DEFAULT NULL,
  `LuotXem` int(11) DEFAULT NULL,
  `LuotBinhChon` int(11) DEFAULT NULL,
  `LuotBinhLuan` int(11) DEFAULT NULL,
  `SoLanMua` int(11) DEFAULT NULL,
  `Moi` int(11) DEFAULT NULL,
  `MaNCC` int(11) DEFAULT NULL,
  `MaNSX` int(11) DEFAULT NULL,
  `MaLoaiSP` int(11) DEFAULT NULL,
  `DaXoa` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `DonGia`, `NgayCapNhap`, `CauHinh`, `MoTa`, `HinhAnh`, `SoLuongTon`, `LuotXem`, `LuotBinhChon`, `LuotBinhLuan`, `SoLanMua`, `Moi`, `MaNCC`, `MaNSX`, `MaLoaiSP`, `DaXoa`) VALUES
(1, 'LAPTOP ACER ASPIRE A514-54-59QK', '17799000', '0000-00-00 00:00:00', '(I5 1135G7/8GBRAM/512GB SSD/14.0/Màn hình: 14 inch FHD', 'LAPTOP ACER ASPIRE A514-54-59QK (NX.A2ASV.008) (I5 1135G7/8GBRAM/512GB SSD/14.0', '250_62568_laptop_acer_aspire_a514_54_21.png', 10, 5000, 2000, 3500, 7, 1, 1, 1, 2, b'0'),
(2, 'LAPTOP ACER ASPIRE A514-54-59QK', '17799000', '0000-00-00 00:00:00', '(I5 1135G7/8GBRAM/512GB SSD/14.0/Màn hình: 14 inch FHD', 'LAPTOP ACER ASPIRE A514-54-59QK (NX.A2ASV.008) (I5 1135G7/8GBRAM/512GB SSD/14.0', '250_62568_laptop_acer_aspire_a514_54_21.png', 10, 5000, 2000, 3500, 7, 1, 1, 1, 2, b'0'),
(3, 'LAPTOP ACER ASPIRE A514-54-59QK', '17799000', '0000-00-00 00:00:00', '(I5 1135G7/8GBRAM/512GB SSD/14.0/Màn hình: 14 inch FHD', 'LAPTOP ACER ASPIRE A514-54-59QK (NX.A2ASV.008) (I5 1135G7/8GBRAM/512GB SSD/14.0', '250_62568_laptop_acer_aspire_a514_54_21.png', 10, 5000, 2000, 3500, 7, 1, 1, 1, 2, b'0'),
(4, 'LAPTOP ACER ASPIRE A514-54-59QK', '17799000', '0000-00-00 00:00:00', '(I5 1135G7/8GBRAM/512GB SSD/14.0/Màn hình: 14 inch FHD', 'LAPTOP ACER ASPIRE A514-54-59QK (NX.A2ASV.008) (I5 1135G7/8GBRAM/512GB SSD/14.0', '250_62568_laptop_acer_aspire_a514_54_21.png', 10, 5000, 2000, 3500, 7, 1, 1, 1, 2, b'0'),
(5, 'LAPTOP ACER ASPIRE A514-54-59QK', '17799000', '0000-00-00 00:00:00', '(I5 1135G7/8GBRAM/512GB SSD/14.0/Màn hình: 14 inch FHD', 'LAPTOP ACER ASPIRE A514-54-59QK (NX.A2ASV.008) (I5 1135G7/8GBRAM/512GB SSD/14.0', '250_62568_laptop_acer_aspire_a514_54_21.png', 10, 5000, 2000, 3500, 7, 1, 1, 1, 2, b'0'),
(6, 'LAPTOP ASUS VIVOBOOK M3401QA-KM040W', '21799000', '0000-00-00 00:00:00', '(LAPTOP ASUS VIVOBOOK M3401QA-KM040W (R7 5800H/8GB RAM/512GB SSD/14', 'LAPTOP ASUS VIVOBOOK M3401QA-KM040W (R7 5800H/8GB RAM/512GB SSD/14', '250_63303_laptop_asus_vivobook_m3401qa_7.jpg', 10, 7000, 3000, 3500, 3, 1, 2, 1, 2, b'0'),
(7, 'LAPTOP ASUS ZENBOOK UX425EA-KI839W', '21499000', '0000-00-00 00:00:00', 'LAPTOP ASUS ZENBOOK UX425EA-KI839W (I5 1135G7/8GB RAM/512GB SSD/14', 'LAPTOP ASUS ZENBOOK UX425EA-KI839W (I5 1135G7/8GB RAM/512GB SSD/14', '250_63613_laptop_asus_zenbook_ux425ea_29.png', 10, 7000, 3000, 3500, 3, 1, 2, 1, 2, b'0'),
(8, 'LAPTOP ASUS GAMING TUF FX506LH-HN002T', '19499000', '0000-00-00 00:00:00', 'LAPTOP ASUS GAMING TUF FX506LH-HN002T (I5 10300H/8GB RAM/512GB SSD/15.6 FHD 144HZ', 'LAPTOP ASUS GAMING TUF FX506LH-HN002T (I5 10300H/8GB RAM/512GB SSD/15.6 FHD 144HZ', '250_63613_laptop_asus_zenbook_ux425ea_29.png', 10, 7000, 3000, 3500, 3, 1, 3, 1, 2, b'0'),
(9, 'LAPTOP MSI GAMING GF65 THIN (10UE-228VN)', '32499000', '0000-00-00 00:00:00', 'LAPTOP MSI GAMING GF65 THIN (10UE-228VN) ( I7 10750H 16GB RAM/512GBSSD/RTX 3060 6G/15.6', 'LAPTOP MSI GAMING GF65 THIN (10UE-228VN) ( I7 10750H 16GB RAM/512GBSSD/RTX 3060 6G/15.6', '250_58207_laptop_msi_gaming_gf65_thin_10ue_228vn_den_ba_lo_8.png', 10, 7000, 3000, 3500, 3, 1, 3, 4, 2, b'0'),
(10, 'LAPTOP MSI CREATOR 15 (A10SDT-483VN)', '38499000', '0000-00-00 00:00:00', 'LAPTOP MSI CREATOR 15 (A10SDT-483VN) (I7 10750H 16GB RAM/512GB SSD/GTX1660TI', 'LAPTOP MSI CREATOR 15 (A10SDT-483VN) (I7 10750H 16GB RAM/512GB SSD/GTX1660TI', '250_58291_creator15__5_.png', 10, 7000, 3000, 3500, 3, 1, 3, 4, 2, b'0'),
(11, 'LAPTOP DELL INSPIRON N7306 (P125G002N7306A)', '33499000', '0000-00-00 00:00:00', 'LAPTOP DELL INSPIRON N7306 (P125G002N7306A) (I7 1165G7 16GB RAM/512GB SSD/13.3 INCH', 'LAPTOP DELL INSPIRON N7306 (P125G002N7306A) (I7 1165G7 16GB RAM/512GB SSD/13.3 INCH', '250_56657_n7306__9_.png', 10, 7000, 3000, 3500, 3, 1, 3, 2, 2, b'0'),
(12, 'iPhone 13 Pro Max 128GB)', '31499000', '0000-00-00 00:00:00', '6.7 inch, OLED, Super Retina XDR, 2778 x 1284 Pixels, 12.0 MP + 12.0 MP + 12.0 MP, 12.0 MP,Apple A15 Bionic, 128 GB', '6.7 inch, OLED, Super Retina XDR, 2778 x 1284 Pixels', 'iphone-13-pro-sierra-blue-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 1, 3, 1, b'0'),
(13, 'iPhone 12 Pro)', '28499000', '0000-00-00 00:00:00', 'Điện thoại iPhone 12 Pro 128GB', 'Điện thoại iPhone 12 Pro 128GB', 'iphone-12-pro-vang-dong-new-600x600-1-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 1, 3, 1, b'0'),
(14, 'iPhone 12 Pro)', '28499000', '0000-00-00 00:00:00', 'Điện thoại iPhone 12 Pro 128GB', 'Điện thoại iPhone 12 Pro 128GB', 'iphone-12-pro-vang-dong-new-600x600-1-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 1, 3, 1, b'0'),
(15, 'iPhone 12 Pro)', '28499000', '0000-00-00 00:00:00', 'Điện thoại iPhone 12 Pro 128GB', 'Điện thoại iPhone 12 Pro 128GB', 'iphone-12-pro-vang-dong-new-600x600-1-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 1, 3, 1, b'0'),
(16, 'iPhone 12 Pro)', '28499000', '0000-00-00 00:00:00', 'Điện thoại iPhone 12 Pro 128GB', 'Điện thoại iPhone 12 Pro 128GB', 'iphone-12-pro-vang-dong-new-600x600-1-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 1, 3, 1, b'0'),
(17, 'iPhone 12 Pro)', '28499000', '0000-00-00 00:00:00', 'Điện thoại iPhone 12 Pro 128GB', 'Điện thoại iPhone 12 Pro 128GB', 'iphone-12-pro-vang-dong-new-600x600-1-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 1, 3, 1, b'0'),
(18, 'Samsung Galaxy S22 Ultra 5G)', '30499000', '0000-00-00 00:00:00', 'Samsung Galaxy S22 Ultra 5G', 'Samsung Galaxy S22 Ultra 5G', 'Galaxy-S22-Ultra-Burgundy-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 1, 6, 1, b'0'),
(19, 'Samsung Galaxy S22+ 5G)', '25499000', '0000-00-00 00:00:00', 'Samsung Galaxy S22+ 5G', 'Samsung Galaxy S22+ 5G', 'Galaxy-S22-Plus-White-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 1, 6, 1, b'0'),
(20, 'Samsung Galaxy S21 Ultra 5G 128GB)', '25499000', '0000-00-00 00:00:00', 'Samsung Galaxy S21 Ultra 5G 128GB', 'Samsung Galaxy S21 Ultra 5G 128GB', 'samsung-galaxy-s21-ultra-bac-600x600-1-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 1, 6, 1, b'0'),
(21, 'Samsung Galaxy S21 FE 5G)', '14499000', '0000-00-00 00:00:00', 'Samsung Galaxy S21 FE 5G', 'Samsung Galaxy S21 FE 5G', 'Samsung-Galaxy-S21-FE-tim-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 2, 6, 1, b'0'),
(22, 'Samsung Galaxy S22 5G)', '21999000', '0000-00-00 00:00:00', 'Samsung Galaxy S22 5G', 'Samsung Galaxy S22 5G', 'Galaxy-S22-Black-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 2, 6, 1, b'0'),
(23, 'Samsung Galaxy Z Fold3 5G)', '38999000', '0000-00-00 00:00:00', 'Samsung Galaxy Z Fold3 5G', 'Samsung Galaxy Z Fold3 5G', 'samsung-galaxy-z-fold-3-silver-1-600x600.jpg', 10, 7000, 3000, 3500, 3, 1, 2, 6, 1, b'0'),
(24, 'iPad Air 4 64GB Wifi - Chính hãng VN)', '14999000', '0000-00-00 00:00:00', 'iPad Air 4 64GB Wifi - Chính hãng VN', 'iPad Air 4 64GB Wifi - Chính hãng VN', 'photo-2021-05-26-22-24-27-211011100032-211011100033_thumb.jpg', 10, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(25, 'iPad Air 4 64GB 4G - Chính hãng VN)', '17999000', '0000-00-00 00:00:00', 'iPad Air 4 64GB 4G - Chính hãng VN', 'iPad Air 4 64GB 4G - Chính hãng VN', 'air-4-trang-210929065555-210929185555_thumb.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(26, 'iPad Air 4 64GB 4G - Chính hãng VN)', '17999000', '0000-00-00 00:00:00', 'iPad Air 4 64GB 4G - Chính hãng VN', 'iPad Air 4 64GB 4G - Chính hãng VN', 'air-4-trang-210929065555-210929185555_thumb.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(27, 'iPad Air 4 256GB 4G - Chính hãng VN)', '21999000', '0000-00-00 00:00:00', 'iPad Air 4 256GB 4G - Chính hãng VN', 'iPad Air 4 256GB 4G - Chính hãng VN', 'ipad-05-210917052341-210917172342_thumb.png', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(28, 'iPad Air 4 256GB 4G - Chính hãng VN)', '21999000', '0000-00-00 00:00:00', 'iPad Air 4 256GB 4G - Chính hãng VN', 'iPad Air 4 256GB 4G - Chính hãng VN', 'ipad-05-210917052341-210917172342_thumb.png', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(29, 'iPad Air 4 256GB 4G - Chính hãng VN)', '21999000', '0000-00-00 00:00:00', 'iPad Air 4 256GB 4G - Chính hãng VN', 'iPad Air 4 256GB 4G - Chính hãng VN', 'ipad-05-210917052341-210917172342_thumb.png', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(30, 'iPad Air 4 256GB 4G - Chính hãng VN)', '21999000', '0000-00-00 00:00:00', 'iPad Air 4 256GB 4G - Chính hãng VN', 'iPad Air 4 256GB 4G - Chính hãng VN', 'ipad-05-210917052341-210917172342_thumb.png', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(31, 'iPad Air 4 256GB 4G - Chính hãng VN)', '21999000', '0000-00-00 00:00:00', 'iPad Air 4 256GB 4G - Chính hãng VN', 'iPad Air 4 256GB 4G - Chính hãng VN', 'ipad-05-210917052341-210917172342_thumb.png', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(32, 'iPad Pro 11\" M1 2021 Wifi - Chính hãng VN)', '21999000', '0000-00-00 00:00:00', 'iPad Pro 11\" M1 2021 Wifi - Chính hãng VN', 'iPad Pro 11\" M1 2021 Wifi - Chính hãng VN', '39227-210610124302-210610124302_thumb.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(33, 'iPad Pro 12.9\" M1 2021 Wifi - Chính hãng VN)', '26999000', '0000-00-00 00:00:00', 'iPad Pro 12.9\" M1 2021 Wifi - Chính hãng VN', 'iPad Pro 12.9\" M1 2021 Wifi - Chính hãng VN', 'photo-2021-06-10-12-24-18-1-210615100903-210615220903_thumb.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(34, 'iPad Pro 12.9\" M1 2021 Wifi - Chính hãng VN)', '26999000', '0000-00-00 00:00:00', 'iPad Pro 12.9\" M1 2021 Wifi - Chính hãng VN', 'iPad Pro 12.9\" M1 2021 Wifi - Chính hãng VN', 'photo-2021-06-10-12-24-18-1-210615100903-210615220903_thumb.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(35, 'iPad Air 5 256GB 5G - Chính hãng VN)', '24999000', '0000-00-00 00:00:00', 'iPad Air 5 256GB 5G - Chính hãng VN', 'iPad Air 5 256GB 5G - Chính hãng VN', 'ipad-air-cellular-lineup-screen-usen-220309023708-220309143708_thumb.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(36, 'iPad Air 5 64GB Wifi - Chính hãng VN)', '15999000', '0000-00-00 00:00:00', 'iPad Air 5 64GB Wifi - Chính hãng VN', 'iPad Air 5 64GB Wifi - Chính hãng VN', 'ipad-air-cellular-lineup-screen-usen-220309023708-220309143708_thumb.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(37, 'iPad Air 5 64GB Wifi - Chính hãng VN)', '15999000', '0000-00-00 00:00:00', 'iPad Air 5 64GB Wifi - Chính hãng VN', 'iPad Air 5 64GB Wifi - Chính hãng VN', 'ipad-mini-6-64g-wifi-5g-chinh-hang-vn-a-png1-210917080739-210917080739_thumb.png', 20, 7000, 3000, 3500, 3, 1, 2, 6, 3, b'0'),
(38, 'Bao da iPhone Xs Max chống sốc cao cấp UAG Metropolis Series)', '999000', '0000-00-00 00:00:00', 'Bao da iPhone Xs Max chống sốc cao cấp UAG Metropolis Series', 'Bao da iPhone Xs Max chống sốc cao cấp UAG Metropolis Series', 'bao-da-iphone-xs-max-chong-soc-bao-da-iphone-xs-max-cao-cap-bao-da-iphone-xs-max-uag-metropolis-series-8620.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 6, 4, b'0'),
(39, 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X)', '359000', '0000-00-00 00:00:00', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'oplung_iphone.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 8, 4, b'0'),
(40, 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X)', '359000', '0000-00-00 00:00:00', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'oplung_iphone.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 8, 4, b'0'),
(41, 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X)', '359000', '0000-00-00 00:00:00', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'oplung_iphone.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 8, 4, b'0'),
(42, 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X)', '359000', '0000-00-00 00:00:00', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'oplung_iphone.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 8, 4, b'0'),
(43, 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X)', '359000', '0000-00-00 00:00:00', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'oplung_iphone.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 8, 4, b'0'),
(44, 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X)', '359000', '0000-00-00 00:00:00', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'Ốp lưng iPhone Xs Max chống sốc Ringke Fusion X', 'oplung_iphone.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 8, 4, b'0'),
(45, 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng)', '150000', '0000-00-00 00:00:00', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'cap-sac-type-c-wiwu-platium-642.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 9, 4, b'0'),
(46, 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng)', '150000', '0000-00-00 00:00:00', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'cap-sac-type-c-wiwu-platium-642.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 9, 4, b'0'),
(47, 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng)', '150000', '0000-00-00 00:00:00', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'cap-sac-type-c-wiwu-platium-642.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 9, 4, b'0'),
(48, 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng)', '150000', '0000-00-00 00:00:00', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'cap-sac-type-c-wiwu-platium-642.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 9, 4, b'0'),
(49, 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng)', '150000', '0000-00-00 00:00:00', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'cap-sac-type-c-wiwu-platium-642.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 9, 4, b'0'),
(50, 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng)', '150000', '0000-00-00 00:00:00', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'cap-sac-type-c-wiwu-platium-642.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 9, 4, b'1'),
(51, 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng)', '150000', '0000-00-00 00:00:00', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'Cáp sạc USB Type-C WIWU Platinum - Hàng Chính Hãng', 'cap-sac-type-c-wiwu-platium-642.jpg', 20, 7000, 3000, 3500, 3, 1, 2, 9, 4, b'0'),
(52, 'Iphone se', '50000000', '2023-03-22 10:21:06', NULL, NULL, '1679455266-10045933-dien-thoai-iphone-se-128gb-black-mxd22vna-1.jpg', 5, NULL, NULL, NULL, NULL, 1, 1, 3, 1, b'1'),
(53, 'Iphone 12 pro', '99999999', '2023-03-22 10:23:44', '<p>- Ram 8gb</p>\r\n\r\n<p>- Rom 512gb</p>\r\n', NULL, '1679455424-Dien-thoai-Apple-iPhone-12-Pro-2020-1536x1536.jpg', 5, NULL, NULL, NULL, NULL, 1, 1, 3, 1, b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `MaThanhVien` int(11) NOT NULL,
  `TaiKhoan` varchar(100) DEFAULT NULL,
  `MatKhau` varchar(100) DEFAULT NULL,
  `HoTen` varchar(100) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(12) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `CauHoi` varchar(255) DEFAULT NULL,
  `CauTraLoi` varchar(255) DEFAULT NULL,
  `MaLoaiTV` int(11) DEFAULT NULL,
  `DaXoa` bit(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`MaThanhVien`, `TaiKhoan`, `MatKhau`, `HoTen`, `DiaChi`, `SoDienThoai`, `Email`, `CauHoi`, `CauTraLoi`, `MaLoaiTV`, `DaXoa`) VALUES
(1, 'nhattin', 'nhattin', 'Đào Nhật Tín', 'Tuy An - Phú Yên', '0384480806', 'nhattin57@gmail.com', 'Bạn có thích chó không', 'Có', 2, b'01'),
(2, 'trungthanh', 'trungthanh', 'Nguyễn Trung Thành', 'Hà Nội', '0357894126', 'trungthanh@gmail.com', 'Bạn có thích chó không', 'Có', 1, b'00'),
(3, 'admin', 'admin', 'Đào Nhật Tín', 'Phú Yên', '0357894126', 'nhattin57@gmail.com', 'Bạn có thích chó không', 'Có', 3, b'00'),
(4, 'nhattin1', '$2y$10$5MvffqglaRCRLhmw9F61lOXFHdfN9JOAOS1C8HMlHrCdL3WSB1Nzi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'01'),
(5, 'nhattin2', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'01'),
(6, 'trungthanh1', 'e10adc3949ba59abbe56e057f20f883e', 'Trung Thành', 'Phú Yên. Việt Nam', '987456321', 'trungthanh@gmail.com', NULL, NULL, NULL, b'00'),
(7, 'nhattin3', 'e10adc3949ba59abbe56e057f20f883e', 'Tín', NULL, NULL, 'nhattin57@gmail.com', NULL, NULL, 3, b'00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`),
  ADD KEY `MaThanhVien` (`MaThanhVien`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD PRIMARY KEY (`MaChiTietDDH`),
  ADD KEY `MaDDH` (`MaDDH`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD PRIMARY KEY (`MaChiTietPN`),
  ADD KEY `MaPN` (`MaPN`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDDH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD KEY `LoaiThanhVien` (`LoaiThanhVien`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSP`);

--
-- Chỉ mục cho bảng `loaithanhvien`
--
ALTER TABLE `loaithanhvien`
  ADD PRIMARY KEY (`MaLoaiTV`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MaNSX`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`MaPN`),
  ADD KEY `MaNCC` (`MaNCC`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLoaiSP` (`MaLoaiSP`),
  ADD KEY `MaNSX` (`MaNSX`),
  ADD KEY `MaNCC` (`MaNCC`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MaThanhVien`),
  ADD KEY `MaLoaiTV` (`MaLoaiTV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  MODIFY `MaChiTietDDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  MODIFY `MaChiTietPN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `MaDDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaithanhvien`
--
ALTER TABLE `loaithanhvien`
  MODIFY `MaLoaiTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MaNCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `MaNSX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `MaPN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `MaThanhVien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaThanhVien`) REFERENCES `thanhvien` (`MaThanhVien`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `binhluan_ibfk_3` FOREIGN KEY (`MaThanhVien`) REFERENCES `thanhvien` (`MaThanhVien`),
  ADD CONSTRAINT `binhluan_ibfk_4` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `chitietdondathang_ibfk_1` FOREIGN KEY (`MaDDH`) REFERENCES `dondathang` (`MaDDH`),
  ADD CONSTRAINT `chitietdondathang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitietdondathang_ibfk_3` FOREIGN KEY (`MaDDH`) REFERENCES `dondathang` (`MaDDH`),
  ADD CONSTRAINT `chitietdondathang_ibfk_4` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitietdondathang_ibfk_5` FOREIGN KEY (`MaDDH`) REFERENCES `dondathang` (`MaDDH`),
  ADD CONSTRAINT `chitietdondathang_ibfk_6` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `chitietphieunhap_ibfk_1` FOREIGN KEY (`MaPN`) REFERENCES `phieunhap` (`MaPN`),
  ADD CONSTRAINT `chitietphieunhap_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitietphieunhap_ibfk_3` FOREIGN KEY (`MaPN`) REFERENCES `phieunhap` (`MaPN`),
  ADD CONSTRAINT `chitietphieunhap_ibfk_4` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_ibfk_4` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaThanhVien`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`LoaiThanhVien`) REFERENCES `thanhvien` (`MaThanhVien`),
  ADD CONSTRAINT `khachhang_ibfk_2` FOREIGN KEY (`LoaiThanhVien`) REFERENCES `thanhvien` (`MaThanhVien`),
  ADD CONSTRAINT `khachhang_ibfk_3` FOREIGN KEY (`LoaiThanhVien`) REFERENCES `thanhvien` (`MaThanhVien`),
  ADD CONSTRAINT `khachhang_ibfk_4` FOREIGN KEY (`LoaiThanhVien`) REFERENCES `loaithanhvien` (`MaLoaiTV`);

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`),
  ADD CONSTRAINT `phieunhap_ibfk_2` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLoaiSP`) REFERENCES `loaisanpham` (`MaLoaiSP`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`),
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`MaLoaiSP`) REFERENCES `loaisanpham` (`MaLoaiSP`),
  ADD CONSTRAINT `sanpham_ibfk_5` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`),
  ADD CONSTRAINT `sanpham_ibfk_6` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`),
  ADD CONSTRAINT `sanpham_ibfk_7` FOREIGN KEY (`MaLoaiSP`) REFERENCES `loaisanpham` (`MaLoaiSP`),
  ADD CONSTRAINT `sanpham_ibfk_8` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`),
  ADD CONSTRAINT `sanpham_ibfk_9` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`);

--
-- Các ràng buộc cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `thanhvien_ibfk_1` FOREIGN KEY (`MaLoaiTV`) REFERENCES `loaithanhvien` (`MaLoaiTV`),
  ADD CONSTRAINT `thanhvien_ibfk_2` FOREIGN KEY (`MaLoaiTV`) REFERENCES `loaithanhvien` (`MaLoaiTV`),
  ADD CONSTRAINT `thanhvien_ibfk_3` FOREIGN KEY (`MaLoaiTV`) REFERENCES `loaithanhvien` (`MaLoaiTV`),
  ADD CONSTRAINT `thanhvien_ibfk_4` FOREIGN KEY (`MaLoaiTV`) REFERENCES `loaithanhvien` (`MaLoaiTV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
