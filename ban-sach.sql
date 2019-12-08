-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2019 lúc 12:25 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `noi_that`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `BinhLuanId` int(11) NOT NULL,
  `BinhLuan` text NOT NULL,
  `Deleted_at` datetime DEFAULT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `SanPhamId` int(11) NOT NULL,
  `NguoiDungId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `ChiTietHoaDonId` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TienKhuyenMai` int(11) DEFAULT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Deleted_at` datetime DEFAULT NULL,
  `SanPhamId` int(11) DEFAULT NULL,
  `HoaDonKhuyenMaiId` int(11) DEFAULT NULL,
  `HoaDonId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioithieu`
--

CREATE TABLE `gioithieu` (
  `Id` int(11) NOT NULL,
  `Mota` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Created_at` datetime NOT NULL,
  `HinhAnh` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `HinhAnhId` int(11) NOT NULL,
  `Anh` varchar(45) NOT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Deleted_at` datetime DEFAULT NULL,
  `SanPhamId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `HoaDonId` int(11) NOT NULL,
  `Code` varchar(45) NOT NULL,
  `TongTien` int(255) DEFAULT NULL,
  `SoLuongSanPham` int(11) DEFAULT NULL,
  `TienKhuyenMai` int(11) DEFAULT NULL,
  `TongTienThanhToan` int(11) DEFAULT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Deleted_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `NguoiDungId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `NguoiDungId` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SDT` varchar(11) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `HinhAnh` text DEFAULT NULL,
  `DiaChi` text DEFAULT NULL,
  `Code` varchar(45) DEFAULT NULL,
  `Quyen` varchar(45) DEFAULT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Deleted_at` datetime DEFAULT NULL,
  `Status` tinyint(1) DEFAULT 1,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `NhaSanXuatId` int(11) NOT NULL,
  `Code` varchar(45) DEFAULT NULL,
  `DiaChi` text NOT NULL,
  `MaSoThue` varchar(45) DEFAULT NULL,
  `Ten` varchar(255) NOT NULL,
  `SDT` int(11) DEFAULT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `SanPhamId` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `Code` varchar(45) NOT NULL,
  `ChatLieu` varchar(45) DEFAULT NULL,
  `Gia` int(45) NOT NULL,
  `Mota` text DEFAULT NULL,
  `SoLuong` int(11) NOT NULL,
  `SoLuongBan` int(11) DEFAULT 0,
  `TiLe` float(3,2) DEFAULT NULL,
  `KichThuoc` varchar(255) DEFAULT NULL,
  `MauSac` varchar(255) DEFAULT NULL,
  `BaoHanh` varchar(255) DEFAULT NULL,
  `GiaoHang` varchar(255) DEFAULT NULL,
  `NhaSanXuat` varchar(45) DEFAULT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Deleted_at` datetime DEFAULT NULL,
  `TheLoaiId` int(11) NOT NULL,
  `Slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) NOT NULL,
  `instance` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `SlideId` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `TrangThai` int(1) NOT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `TheLoaiId` int(11) NOT NULL,
  `Code` varchar(45) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `MoTa` text DEFAULT NULL,
  `NhaSanXuatId` int(11) DEFAULT NULL,
  `Slug` varchar(45) DEFAULT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `TinTucId` int(11) NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mota` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`BinhLuanId`),
  ADD KEY `binhluan_news_id_foreign` (`SanPhamId`),
  ADD KEY `binhluan_nguoi_foreign` (`NguoiDungId`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`ChiTietHoaDonId`),
  ADD KEY `chittiethoadon_hoadon_id_foreign` (`HoaDonId`),
  ADD KEY `chitiethoadon_sanpham_id_foreign` (`SanPhamId`);

--
-- Chỉ mục cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`HinhAnhId`),
  ADD KEY `sanpham_hinhanh` (`SanPhamId`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`HoaDonId`),
  ADD KEY `khachhang_hoadon_id_foreign` (`NguoiDungId`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`NguoiDungId`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`NhaSanXuatId`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`SanPhamId`),
  ADD KEY `sanpham_theloai_id_foreign` (`TheLoaiId`);

--
-- Chỉ mục cho bảng `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`SlideId`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`TheLoaiId`),
  ADD KEY `theloai_nhasanxuat_id_foreign` (`NhaSanXuatId`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`TinTucId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `BinhLuanId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `ChiTietHoaDonId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `HinhAnhId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `HoaDonId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `NguoiDungId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `NhaSanXuatId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `SanPhamId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `SlideId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `TheLoaiId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `TinTucId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_news_id_foreign` FOREIGN KEY (`SanPhamId`) REFERENCES `sanpham` (`SanPhamId`),
  ADD CONSTRAINT `binhluan_nguoi_foreign` FOREIGN KEY (`NguoiDungId`) REFERENCES `nguoidung` (`NguoiDungId`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_hoadon_id_foreign` FOREIGN KEY (`HoaDonId`) REFERENCES `hoadon` (`HoaDonId`),
  ADD CONSTRAINT `chitiethoadon_sanpham_id_foreign` FOREIGN KEY (`SanPhamId`) REFERENCES `sanpham` (`SanPhamId`);

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `sanpham_hinhanh` FOREIGN KEY (`SanPhamId`) REFERENCES `sanpham` (`SanPhamId`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_nguoidung_id_foreign` FOREIGN KEY (`NguoiDungId`) REFERENCES `nguoidung` (`NguoiDungId`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_theloai_id_foreign` FOREIGN KEY (`TheLoaiId`) REFERENCES `theloai` (`TheLoaiId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
