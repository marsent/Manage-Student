-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 14, 2020 lúc 03:27 AM
-- Phiên bản máy phục vụ: 8.0.18
-- Phiên bản PHP: 7.4.0

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlhs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangdiemmon`
--

DROP TABLE IF EXISTS `bangdiemmon`;
CREATE TABLE IF NOT EXISTS `bangdiemmon` (
  `MaBangDiemMon` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaQTHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaMonHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `DiemTBMon` double NOT NULL,
  PRIMARY KEY (`MaBangDiemMon`),
  KEY `MaQTHoc` (`MaQTHoc`),
  KEY `FK_BDMMH` (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `bangdiemmon`
--

INSERT INTO `bangdiemmon` (`MaBangDiemMon`, `MaQTHoc`, `MaMonHoc`, `DiemTBMon`) VALUES
('BD1', 'QT1', 'TNC11', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baocaotongkethocky`
--

DROP TABLE IF EXISTS `baocaotongkethocky`;
CREATE TABLE IF NOT EXISTS `baocaotongkethocky` (
  `MaHocKy` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `SoLuongDat` int(11) NOT NULL,
  `TiLe` double NOT NULL,
  PRIMARY KEY (`MaHocKy`,`MaLop`),
  KEY `FK_BKTKHKLH` (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `baocaotongkethocky`
--

INSERT INTO `baocaotongkethocky` (`MaHocKy`, `MaLop`, `SoLuongDat`, `TiLe`) VALUES
('HK1N2K', 'K111A1', 40, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baocaotongketmon`
--

DROP TABLE IF EXISTS `baocaotongketmon`;
CREATE TABLE IF NOT EXISTS `baocaotongketmon` (
  `MaBCTKM` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaMonHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaHocKy` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  PRIMARY KEY (`MaBCTKM`) USING BTREE,
  KEY `FK_BKTKMMH` (`MaMonHoc`),
  KEY `FK_BCTKMHK` (`MaHocKy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `baocaotongketmon`
--

INSERT INTO `baocaotongketmon` (`MaBCTKM`, `MaMonHoc`, `MaHocKy`) VALUES
('BCTKM1', 'TNC11', 'HK1N2K');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinhhoc`
--

DROP TABLE IF EXISTS `chuongtrinhhoc`;
CREATE TABLE IF NOT EXISTS `chuongtrinhhoc` (
  `MaKhoiLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaMonHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `HeSo` int(11) NOT NULL,
  PRIMARY KEY (`MaKhoiLop`,`MaMonHoc`),
  KEY `FK_CTHMH` (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `chuongtrinhhoc`
--

INSERT INTO `chuongtrinhhoc` (`MaKhoiLop`, `MaMonHoc`, `HeSo`) VALUES
('K1KH11', 'TNC11', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_bangdiemmon`
--

DROP TABLE IF EXISTS `ct_bangdiemmon`;
CREATE TABLE IF NOT EXISTS `ct_bangdiemmon` (
  `MaCT_BangDiemMon` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaBangDiemMon` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaLHKT` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `Diem` double NOT NULL,
  PRIMARY KEY (`MaCT_BangDiemMon`),
  KEY `FK_CTBDMBDM` (`MaBangDiemMon`),
  KEY `FK_CTBDMLHKT` (`MaLHKT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `ct_bangdiemmon`
--

INSERT INTO `ct_bangdiemmon` (`MaCT_BangDiemMon`, `MaBangDiemMon`, `MaLHKT`, `Diem`) VALUES
('CT1', 'BD1', '15P', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_bctkm`
--

DROP TABLE IF EXISTS `ct_bctkm`;
CREATE TABLE IF NOT EXISTS `ct_bctkm` (
  `MaBCTKM` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `SoLuongDat` int(11) NOT NULL,
  `TiLe` double NOT NULL,
  PRIMARY KEY (`MaBCTKM`,`MaLop`) USING BTREE,
  KEY `FK_CTTKMLH` (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `ct_bctkm`
--

INSERT INTO `ct_bctkm` (`MaBCTKM`, `MaLop`, `SoLuongDat`, `TiLe`) VALUES
('BCTKM1', 'K111A1', 40, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

DROP TABLE IF EXISTS `hocky`;
CREATE TABLE IF NOT EXISTS `hocky` (
  `MaHocKy` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `HocKy` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaNam` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  PRIMARY KEY (`MaHocKy`),
  KEY `FK_HKNH` (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`MaHocKy`, `HocKy`, `MaNam`) VALUES
('HK1N2K', 'Học Kỳ ', 'N2000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

DROP TABLE IF EXISTS `hocsinh`;
CREATE TABLE IF NOT EXISTS `hocsinh` (
  `MaHocSinh` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `GioiTinh` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  PRIMARY KEY (`MaHocSinh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`MaHocSinh`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`) VALUES
('HS1', 'Trẫn VÕ NGuyễn Văn A', 'Nam', '2000-02-19', 'KTX Khu B Đ', 'abc@conde.c');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoilop`
--

DROP TABLE IF EXISTS `khoilop`;
CREATE TABLE IF NOT EXISTS `khoilop` (
  `MaKhoiLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaNam` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `TenKhoiLop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `Ban` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `SoLop` int(11) NOT NULL,
  PRIMARY KEY (`MaKhoiLop`),
  KEY `FK_KLNH` (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `khoilop`
--

INSERT INTO `khoilop` (`MaKhoiLop`, `MaNam`, `TenKhoiLop`, `Ban`, `SoLop`) VALUES
('K1KH11', 'N2000', 'Khối 11', 'A', 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihinhkiemtra`
--

DROP TABLE IF EXISTS `loaihinhkiemtra`;
CREATE TABLE IF NOT EXISTS `loaihinhkiemtra` (
  `MaLHKT` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `TenLHKT` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `HeSo` int(11) NOT NULL,
  PRIMARY KEY (`MaLHKT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `loaihinhkiemtra`
--

INSERT INTO `loaihinhkiemtra` (`MaLHKT`, `TenLHKT`, `HeSo`) VALUES
('15P', 'KIểm tra 15 phút', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `MaLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `TenLop` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaKhoiLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `SiSo` int(11) NOT NULL,
  PRIMARY KEY (`MaLop`),
  KEY `FK_LOPKL` (`MaKhoiLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoiLop`, `SiSo`) VALUES
('K111A1', 'Lớp 11A1', 'K1KH11', 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `MaMonHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `TenMonHoc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  PRIMARY KEY (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMonHoc`) VALUES
('TNC11', 'Toán Nâng Cao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `namhoc`
--

DROP TABLE IF EXISTS `namhoc`;
CREATE TABLE IF NOT EXISTS `namhoc` (
  `MaNam` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `NamHoc` int(11) NOT NULL,
  PRIMARY KEY (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `namhoc`
--

INSERT INTO `namhoc` (`MaNam`, `NamHoc`) VALUES
('N2000', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quatrinhhoc`
--

DROP TABLE IF EXISTS `quatrinhhoc`;
CREATE TABLE IF NOT EXISTS `quatrinhhoc` (
  `MaQTHoc` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaHocSinh` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaLop` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `MaHocKy` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `DiemTBHK` double NOT NULL,
  PRIMARY KEY (`MaQTHoc`),
  KEY `FK_QTHHS` (`MaHocSinh`),
  KEY `FK_QTHLOP` (`MaLop`),
  KEY `FK_QTHHK` (`MaHocKy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Đang đổ dữ liệu cho bảng `quatrinhhoc`
--

INSERT INTO `quatrinhhoc` (`MaQTHoc`, `MaHocSinh`, `MaLop`, `MaHocKy`, `DiemTBHK`) VALUES
('QT1', 'HS1', 'K111A1', 'HK1N2K', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongso`
--

DROP TABLE IF EXISTS `thongso`;
CREATE TABLE IF NOT EXISTS `thongso` (
  `MaThongSo` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `TenThongSo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `GiaTri` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bangdiemmon`
--
ALTER TABLE `bangdiemmon`
  ADD CONSTRAINT `FK_BDMMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_BDMQTH` FOREIGN KEY (`MaQTHoc`) REFERENCES `quatrinhhoc` (`MaQTHoc`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `baocaotongkethocky`
--
ALTER TABLE `baocaotongkethocky`
  ADD CONSTRAINT `FK_BKTKHKHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_BKTKHKLH` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `baocaotongketmon`
--
ALTER TABLE `baocaotongketmon`
  ADD CONSTRAINT `FK_BCTKMHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_BCTKMMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD CONSTRAINT `FK_CTHKL` FOREIGN KEY (`MaKhoiLop`) REFERENCES `khoilop` (`MaKhoiLop`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_CTHMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `ct_bangdiemmon`
--
ALTER TABLE `ct_bangdiemmon`
  ADD CONSTRAINT `FK_CTBDMBDM` FOREIGN KEY (`MaBangDiemMon`) REFERENCES `bangdiemmon` (`MaBangDiemMon`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_CTBDMLHKT` FOREIGN KEY (`MaLHKT`) REFERENCES `loaihinhkiemtra` (`MaLHKT`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `ct_bctkm`
--
ALTER TABLE `ct_bctkm`
  ADD CONSTRAINT `FK_CTTKMBCTKM` FOREIGN KEY (`MaBCTKM`) REFERENCES `baocaotongketmon` (`MaBCTKM`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_CTTKMLH` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD CONSTRAINT `FK_HKNH` FOREIGN KEY (`MaNam`) REFERENCES `namhoc` (`MaNam`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `khoilop`
--
ALTER TABLE `khoilop`
  ADD CONSTRAINT `FK_KLNH` FOREIGN KEY (`MaNam`) REFERENCES `namhoc` (`MaNam`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `FK_LOPKL` FOREIGN KEY (`MaKhoiLop`) REFERENCES `khoilop` (`MaKhoiLop`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `quatrinhhoc`
--
ALTER TABLE `quatrinhhoc`
  ADD CONSTRAINT `FK_QTHHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_QTHHS` FOREIGN KEY (`MaHocSinh`) REFERENCES `hocsinh` (`MaHocSinh`) ON DELETE RESTRICT ON UPDATE RESTRICT;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
