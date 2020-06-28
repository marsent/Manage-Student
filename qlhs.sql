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
DROP DATABASE IF EXISTS `qlhs`
CREATE DATABASE `qlhs`
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangdiemmon`
--

DROP TABLE IF EXISTS `bangdiemmon`;
CREATE TABLE IF NOT EXISTS `bangdiemmon` (
  `MaBangDiemMon` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaQTHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaMonHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DiemTBMon` double NOT NULL,
  PRIMARY KEY (`MaBangDiemMon`),
  KEY `MaQTHoc` (`MaQTHoc`),
  KEY `FK_BDMMH` (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bangdiemmon`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baocaotongkethocky`
--

DROP TABLE IF EXISTS `baocaotongkethocky`;
CREATE TABLE IF NOT EXISTS `baocaotongkethocky` (
  `MaHocKy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SoLuongDat` int(11) NOT NULL,
  `TiLe` double NOT NULL,
  PRIMARY KEY (`MaHocKy`,`MaLop`),
  KEY `FK_BKTKHKLH` (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baocaotongkethocky`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baocaotongketmon`
--

DROP TABLE IF EXISTS `baocaotongketmon`;
CREATE TABLE IF NOT EXISTS `baocaotongketmon` (
  `MaBCTKM` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaMonHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaHocKy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`MaBCTKM`) USING BTREE,
  KEY `FK_BKTKMMH` (`MaMonHoc`),
  KEY `FK_BCTKMHK` (`MaHocKy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baocaotongketmon`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinhhoc`
--

DROP TABLE IF EXISTS `chuongtrinhhoc`;
CREATE TABLE IF NOT EXISTS `chuongtrinhhoc` (
  `MaKhoiLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaMonHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HeSo` int(11) NOT NULL,
  PRIMARY KEY (`MaKhoiLop`,`MaMonHoc`),
  KEY `FK_CTHMH` (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chuongtrinhhoc`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_bangdiemmon`
--

DROP TABLE IF EXISTS `ct_bangdiemmon`;
CREATE TABLE IF NOT EXISTS `ct_bangdiemmon` (
  `MaCT_BangDiemMon` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaBangDiemMon` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaLHKT` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Diem` double NOT NULL,
  PRIMARY KEY (`MaCT_BangDiemMon`),
  KEY `FK_CTBDMBDM` (`MaBangDiemMon`),
  KEY `FK_CTBDMLHKT` (`MaLHKT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_bangdiemmon`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_bctkm`
--

DROP TABLE IF EXISTS `ct_bctkm`;
CREATE TABLE IF NOT EXISTS `ct_bctkm` (
  `MaBCTKM` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SoLuongDat` int(11) NOT NULL,
  `TiLe` double NOT NULL,
  PRIMARY KEY (`MaBCTKM`,`MaLop`) USING BTREE,
  KEY `FK_CTTKMLH` (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_bctkm`
--


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

DROP TABLE IF EXISTS `hocky`;
CREATE TABLE IF NOT EXISTS `hocky` (
  `MaHocKy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HocKy` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaNam` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`MaHocKy`),
  KEY `FK_HKNH` (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

DROP TABLE IF EXISTS `hocsinh`;
CREATE TABLE IF NOT EXISTS `hocsinh` (
  `MaHocSinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GioiTinh` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`MaHocSinh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoilop`
--

DROP TABLE IF EXISTS `khoilop`;
CREATE TABLE IF NOT EXISTS `khoilop` (
  `MaKhoiLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaNam` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenKhoiLop` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Ban` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SoLop` int(11) NOT NULL,
  PRIMARY KEY (`MaKhoiLop`),
  KEY `FK_KLNH` (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khoilop`
--


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihinhkiemtra`
--

DROP TABLE IF EXISTS `loaihinhkiemtra`;
CREATE TABLE IF NOT EXISTS `loaihinhkiemtra` (
  `MaLHKT` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenLHKT` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HeSo` int(11) NOT NULL,
  PRIMARY KEY (`MaLHKT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihinhkiemtra`
--


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `MaLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenLop` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaKhoiLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SiSo` int(11) NOT NULL,
  PRIMARY KEY (`MaLop`),
  KEY `FK_LOPKL` (`MaKhoiLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `MaMonHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenMonHoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`MaMonHoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `namhoc`
--

DROP TABLE IF EXISTS `namhoc`;
CREATE TABLE IF NOT EXISTS `namhoc` (
  `MaNam` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NamHoc` int(11) NOT NULL,
  PRIMARY KEY (`MaNam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `namhoc`
--


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quatrinhhoc`
--

DROP TABLE IF EXISTS `quatrinhhoc`;
CREATE TABLE IF NOT EXISTS `quatrinhhoc` (
  `MaQTHoc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaHocSinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaLop` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaHocKy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DiemTBHK` double NOT NULL,
  PRIMARY KEY (`MaQTHoc`),
  KEY `FK_QTHHS` (`MaHocSinh`),
  KEY `FK_QTHLOP` (`MaLop`),
  KEY `FK_QTHHK` (`MaHocKy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quatrinhhoc`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongso`
--

DROP TABLE IF EXISTS `thongso`;
CREATE TABLE IF NOT EXISTS `thongso` (
  `MaThongSo` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenThongSo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GiaTri` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bangdiemmon`
--
ALTER TABLE `bangdiemmon`
  ADD CONSTRAINT `FK_BDMMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BDMQTH` FOREIGN KEY (`MaQTHoc`) REFERENCES `quatrinhhoc` (`MaQTHoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `baocaotongkethocky`
--
ALTER TABLE `baocaotongkethocky`
  ADD CONSTRAINT `FK_BKTKHKHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BKTKHKLH` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `baocaotongketmon`
--
ALTER TABLE `baocaotongketmon`
  ADD CONSTRAINT `FK_BCTKMHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BCTKMMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD CONSTRAINT `FK_CTHKL` FOREIGN KEY (`MaKhoiLop`) REFERENCES `khoilop` (`MaKhoiLop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTHMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ct_bangdiemmon`
--
ALTER TABLE `ct_bangdiemmon`
  ADD CONSTRAINT `FK_CTBDMBDM` FOREIGN KEY (`MaBangDiemMon`) REFERENCES `bangdiemmon` (`MaBangDiemMon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTBDMLHKT` FOREIGN KEY (`MaLHKT`) REFERENCES `loaihinhkiemtra` (`MaLHKT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ct_bctkm`
--
ALTER TABLE `ct_bctkm`
  ADD CONSTRAINT `FK_CTTKMBCTKM` FOREIGN KEY (`MaBCTKM`) REFERENCES `baocaotongketmon` (`MaBCTKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CTTKMLH` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD CONSTRAINT `FK_HKNH` FOREIGN KEY (`MaNam`) REFERENCES `namhoc` (`MaNam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khoilop`
--
ALTER TABLE `khoilop`
  ADD CONSTRAINT `FK_KLNH` FOREIGN KEY (`MaNam`) REFERENCES `namhoc` (`MaNam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `FK_LOPKL` FOREIGN KEY (`MaKhoiLop`) REFERENCES `khoilop` (`MaKhoiLop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `quatrinhhoc`
--
ALTER TABLE `quatrinhhoc`
  ADD CONSTRAINT `FK_QTHHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_QTHHS` FOREIGN KEY (`MaHocSinh`) REFERENCES `hocsinh` (`MaHocSinh`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
