-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 28, 2021 lúc 05:04 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `bangdiemmon` (
  `MaBangDiemMon` varchar(20) NOT NULL,
  `MaQTHoc` varchar(20) NOT NULL,
  `MaMonHoc` varchar(20) NOT NULL,
  `KiemTra15pl1` double DEFAULT NULL,
  `KiemTra15pl2` double DEFAULT NULL,
  `KiemTra15pl3` double DEFAULT NULL,
  `KiemTra1tl1` double DEFAULT NULL,
  `KiemTra1tl2` double DEFAULT NULL,
  `ThiHocKy` double DEFAULT NULL,
  `DiemTBMon` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bangdiemmon`
--

INSERT INTO `bangdiemmon` (`MaBangDiemMon`, `MaQTHoc`, `MaMonHoc`, `KiemTra15pl1`, `KiemTra15pl2`, `KiemTra15pl3`, `KiemTra1tl1`, `KiemTra1tl2`, `ThiHocKy`, `DiemTBMon`) VALUES
('HS1HK1N1920DD', 'HS1HK1N1920', 'DD', NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baocaothongkemon`
--

CREATE TABLE `baocaothongkemon` (
  `MaBCTKM` varchar(20) NOT NULL,
  `MaMonHoc` varchar(20) NOT NULL,
  `MaHocKy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `baocaothongkemon`
--

INSERT INTO `baocaothongkemon` (`MaBCTKM`, `MaMonHoc`, `MaHocKy`) VALUES
('DDHK1N1920', 'DD', 'HK1N1920');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baocaotongkethocky`
--

CREATE TABLE `baocaotongkethocky` (
  `MaHocKy` varchar(20) NOT NULL,
  `MaLop` varchar(20) NOT NULL,
  `SoLuongDat` int(11) NOT NULL,
  `TiLe` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `baocaotongkethocky`
--

INSERT INTO `baocaotongkethocky` (`MaHocKy`, `MaLop`, `SoLuongDat`, `TiLe`) VALUES
('HK1N1920', '10A1N1920', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinhhoc`
--

CREATE TABLE `chuongtrinhhoc` (
  `MaKhoiLop` varchar(20) NOT NULL,
  `MaMonHoc` varchar(20) NOT NULL,
  `HeSo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_bangdiemmon`
--

CREATE TABLE `ct_bangdiemmon` (
  `MaCT_BangDiemMon` varchar(20) NOT NULL,
  `MaBangDiemMon` varchar(20) NOT NULL,
  `MaLHKT` varchar(5) NOT NULL,
  `Diem` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_bctkm`
--

CREATE TABLE `ct_bctkm` (
  `MaBCTKM` varchar(20) NOT NULL,
  `MaLop` varchar(20) NOT NULL,
  `SoLuongDat` int(11) NOT NULL,
  `TiLe` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ct_bctkm`
--

INSERT INTO `ct_bctkm` (`MaBCTKM`, `MaLop`, `SoLuongDat`, `TiLe`) VALUES
('DDHK1N1920', '10A1N1920', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

CREATE TABLE `hocky` (
  `MaHocKy` varchar(20) NOT NULL,
  `HocKy` varchar(50) NOT NULL,
  `MaNam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`MaHocKy`, `HocKy`, `MaNam`) VALUES
('HK1N1920', 'Hoc Kỳ 1', 'N1920'),
('HK1N2021', 'Hoc Kỳ 1', 'N2021'),
('HK1N2122', 'Hoc Kỳ 1', 'N2122'),
('HK2N1920', 'Hoc Kỳ 2', 'N1920'),
('HK2N2021', 'Hoc Kỳ 2', 'N2021'),
('HK2N2122', 'Hoc Kỳ 2', 'N2122');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

CREATE TABLE `hocsinh` (
  `MaHocSinh` varchar(20) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `GioiTinh` varchar(3) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`MaHocSinh`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Email`) VALUES
('HS1', 'Đào Huỳnh Minh Thuận', 'Nam', '2004-02-19', 'quang trung thu duc', 'marsent.com@gmail.com'),
('HS2', 'Ha Vuong Quoc', 'Nam', '2004-12-12', 'quang trung thu duc', 'marsent.com@gmail.com'),
('HS3', 'Hỷ Hoa Phương', 'Nữ', '2004-03-13', 'quang trung thu duc', 'marsent.com@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoilop`
--

CREATE TABLE `khoilop` (
  `MaKhoiLop` varchar(20) NOT NULL,
  `MaNam` varchar(20) NOT NULL,
  `TenKhoiLop` varchar(50) NOT NULL,
  `Ban` varchar(20) NOT NULL,
  `SoLop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoilop`
--

INSERT INTO `khoilop` (`MaKhoiLop`, `MaNam`, `TenKhoiLop`, `Ban`, `SoLop`) VALUES
('K10N1920', 'N1920', 'Khối 10', 'A', 10),
('K11N1920', 'N1920', 'Khối 11', 'A', 10),
('K12N1920', 'N1920', 'Khối 12', 'A', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihinhkiemtra`
--

CREATE TABLE `loaihinhkiemtra` (
  `MaLHKT` varchar(20) NOT NULL,
  `TenLHKT` varchar(50) NOT NULL,
  `HeSo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(20) NOT NULL,
  `TenLop` varchar(50) NOT NULL,
  `MaKhoiLop` varchar(20) NOT NULL,
  `SiSo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoiLop`, `SiSo`) VALUES
('10A1N1920', '10A1', 'K10N1920', 3),
('10A3N1920', '10A3', 'K10N1920', 0),
('10A4N1920', '10A4', 'K10N1920', 0),
('10A5N1920', '10A5', 'K10N1920', 0),
('11A1N1920', '11A1', 'K11N1920', 0),
('12A1N1920', '12A1', 'K12N1920', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMonHoc` varchar(20) NOT NULL,
  `TenMonHoc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMonHoc`) VALUES
('DD', 'Đạo Đức'),
('DL', 'Địa Lí'),
('HH', 'Hóa Học'),
('LS', 'Lịch Sử'),
('NV', 'Ngữ Văn'),
('SH', 'Sinh Học'),
('T', 'Toán'),
('TD', 'Thể Dục'),
('VL', 'Vật Lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `namhoc`
--

CREATE TABLE `namhoc` (
  `MaNam` varchar(20) NOT NULL,
  `NamHoc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `namhoc`
--

INSERT INTO `namhoc` (`MaNam`, `NamHoc`) VALUES
('N1920', '2019-2020'),
('N2021', '2020-2021'),
('N2122', '2021-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quatrinhhoc`
--

CREATE TABLE `quatrinhhoc` (
  `MaQTHoc` varchar(20) NOT NULL,
  `MaHocSinh` varchar(20) NOT NULL,
  `MaLop` varchar(20) NOT NULL,
  `MaHocKy` varchar(20) NOT NULL,
  `DiemTBHK` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quatrinhhoc`
--

INSERT INTO `quatrinhhoc` (`MaQTHoc`, `MaHocSinh`, `MaLop`, `MaHocKy`, `DiemTBHK`) VALUES
('HS1HK1N1920', 'HS1', '10A1N1920', 'HK1N1920', 0),
('HS1HK2N1920', 'HS1', '10A1N1920', 'HK2N1920', 0),
('HS2HK1N1920', 'HS2', '10A1N1920', 'HK1N1920', 0),
('HS2HK2N1920', 'HS2', '10A1N1920', 'HK2N1920', 0),
('HS3HK1N1920', 'HS3', '10A1N1920', 'HK1N1920', 0),
('HS3HK2N1920', 'HS3', '10A1N1920', 'HK2N1920', 0);

--
-- Bẫy `quatrinhhoc`
--
DELIMITER $$
CREATE TRIGGER `caculate_siso` AFTER INSERT ON `quatrinhhoc` FOR EACH ROW BEGIN
declare siso int;
set @siso:=(select count(distinct mahocsinh)from quatrinhhoc where malop=new.malop);
UPDATE lop 
SET 
    siso = @siso
WHERE
    malop = new.malop;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongso`
--

CREATE TABLE `thongso` (
  `MaThongSo` varchar(20) NOT NULL,
  `TenThongSo` varchar(50) NOT NULL,
  `GiaTri` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thongso`
--

INSERT INTO `thongso` (`MaThongSo`, `TenThongSo`, `GiaTri`) VALUES
('DD', 'Điểm đạt', 5),
('DDM', 'Điểm đạt môn', 5),
('SLTDK10', 'Số lớp tối đa khối 10', 10),
('SLTDK11', 'Số lớp tối đa khối 11', 10),
('SLTDK12', 'Số lớp tối đa khối 12', 10),
('SSTD', 'Sỉ số tối đa mỗi lớp', 16),
('TTD', 'Tuổi tối đa', 20),
('TTT', 'Tuổi tối thiểu', 15);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangdiemmon`
--
ALTER TABLE `bangdiemmon`
  ADD PRIMARY KEY (`MaBangDiemMon`),
  ADD KEY `MaQTHoc` (`MaQTHoc`),
  ADD KEY `FK_BDMMH` (`MaMonHoc`);

--
-- Chỉ mục cho bảng `baocaothongkemon`
--
ALTER TABLE `baocaothongkemon`
  ADD PRIMARY KEY (`MaBCTKM`) USING BTREE,
  ADD KEY `FK_BKTKMMH` (`MaMonHoc`),
  ADD KEY `FK_BCTKMHK` (`MaHocKy`);

--
-- Chỉ mục cho bảng `baocaotongkethocky`
--
ALTER TABLE `baocaotongkethocky`
  ADD PRIMARY KEY (`MaHocKy`,`MaLop`),
  ADD KEY `FK_BKTKHKLH` (`MaLop`);

--
-- Chỉ mục cho bảng `chuongtrinhhoc`
--
ALTER TABLE `chuongtrinhhoc`
  ADD PRIMARY KEY (`MaKhoiLop`,`MaMonHoc`),
  ADD KEY `FK_CTHMH` (`MaMonHoc`);

--
-- Chỉ mục cho bảng `ct_bangdiemmon`
--
ALTER TABLE `ct_bangdiemmon`
  ADD PRIMARY KEY (`MaCT_BangDiemMon`),
  ADD KEY `FK_CTBDMBDM` (`MaBangDiemMon`),
  ADD KEY `FK_CTBDMLHKT` (`MaLHKT`);

--
-- Chỉ mục cho bảng `ct_bctkm`
--
ALTER TABLE `ct_bctkm`
  ADD PRIMARY KEY (`MaBCTKM`,`MaLop`) USING BTREE,
  ADD KEY `FK_CTTKMLH` (`MaLop`);

--
-- Chỉ mục cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`MaHocKy`),
  ADD KEY `FK_HKNH` (`MaNam`);

--
-- Chỉ mục cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`MaHocSinh`);

--
-- Chỉ mục cho bảng `khoilop`
--
ALTER TABLE `khoilop`
  ADD PRIMARY KEY (`MaKhoiLop`),
  ADD KEY `FK_KLNH` (`MaNam`);

--
-- Chỉ mục cho bảng `loaihinhkiemtra`
--
ALTER TABLE `loaihinhkiemtra`
  ADD PRIMARY KEY (`MaLHKT`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `FK_LOPKL` (`MaKhoiLop`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMonHoc`);

--
-- Chỉ mục cho bảng `namhoc`
--
ALTER TABLE `namhoc`
  ADD PRIMARY KEY (`MaNam`);

--
-- Chỉ mục cho bảng `quatrinhhoc`
--
ALTER TABLE `quatrinhhoc`
  ADD PRIMARY KEY (`MaQTHoc`),
  ADD KEY `FK_QTHHS` (`MaHocSinh`),
  ADD KEY `FK_QTHLOP` (`MaLop`),
  ADD KEY `FK_QTHHK` (`MaHocKy`);

--
-- Chỉ mục cho bảng `thongso`
--
ALTER TABLE `thongso`
  ADD PRIMARY KEY (`MaThongSo`);

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
-- Các ràng buộc cho bảng `baocaothongkemon`
--
ALTER TABLE `baocaothongkemon`
  ADD CONSTRAINT `FK_BCTKMHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BCTKMMH` FOREIGN KEY (`MaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `baocaotongkethocky`
--
ALTER TABLE `baocaotongkethocky`
  ADD CONSTRAINT `FK_BKTKHKHK` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BKTKHKLH` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `FK_CTTKMBCTKM` FOREIGN KEY (`MaBCTKM`) REFERENCES `baocaothongkemon` (`MaBCTKM`) ON DELETE CASCADE ON UPDATE CASCADE,
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
