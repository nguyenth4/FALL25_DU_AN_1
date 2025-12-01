-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 01, 2025 lúc 12:56 AM
-- Phiên bản máy phục vụ: 8.0.42
-- Phiên bản PHP: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fall25_lumos`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `cart_id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`cart_id`, `product_id`, `user_id`, `quantity`) VALUES
(1, 1, 1, 2),
(2, 2, 1, 1),
(3, 3, 2, 3),
(4, 4, 3, 1),
(5, 5, 4, 2),
(6, 6, 5, 1),
(7, 7, 6, 4),
(8, 8, 7, 1),
(9, 9, 8, 2),
(10, 10, 9, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `status`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Kính Thời Trang', 1, 'kinh-thoi-trang', NULL, '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(2, 'Kính Râm', 1, 'kinh-ram', NULL, '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(3, 'Kính Cận', 1, 'kinh-can', NULL, '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(4, 'Kính Bảo Hộ', 1, 'kinh-bao-ho', NULL, '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(5, 'Kính Nam', 1, 'kinh-nam', NULL, '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(6, 'Kính Nữ', 1, 'kinh-nu', NULL, '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(7, 'Kính Trẻ Em', 1, 'kinh-tre-em', NULL, '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(8, 'Kính Chống Ánh Sáng Xanh', 1, 'kinh-chong-anh-sang-xanh', NULL, '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(9, 'Kính Cao Cấp', 1, 'kinh-cao-cap', NULL, '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(10, 'Phụ Kiện Kính', 1, 'phu-kien-kinh', NULL, '2025-11-23 23:49:10', '2025-11-23 23:49:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `total_amount` decimal(12,0) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `orders_status` enum('pending','processing','completed','cancelled') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `total_amount`, `payment_method`, `shipping_address`, `orders_status`, `created_at`, `updated_at`) VALUES
(1, 1, 500000, 'COD', 'HN', 'pending', '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(2, 2, 600000, 'Bank', 'HCM', 'processing', '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(3, 3, 700000, 'COD', 'DN', 'completed', '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(4, 4, 800000, 'COD', 'CT', 'pending', '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(5, 5, 900000, 'Bank', 'HP', 'completed', '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(6, 6, 400000, 'COD', 'BD', 'pending', '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(7, 7, 1000000, 'Bank', 'TG', 'cancelled', '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(8, 8, 300000, 'COD', 'LA', 'processing', '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(9, 9, 200000, 'Bank', 'AG', 'completed', '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(10, 10, 1500000, 'COD', 'HN', 'processing', '2025-11-23 23:49:10', '2025-11-23 23:49:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `detail_id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` decimal(12,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`detail_id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`) VALUES
(1, 1, 1, 2, 250000, '2025-11-23 23:49:10'),
(2, 2, 2, 1, 300000, '2025-11-23 23:49:10'),
(3, 3, 3, 2, 350000, '2025-11-23 23:49:10'),
(4, 4, 4, 1, 180000, '2025-11-23 23:49:10'),
(5, 5, 5, 1, 400000, '2025-11-23 23:49:10'),
(6, 6, 6, 1, 450000, '2025-11-23 23:49:10'),
(7, 7, 7, 2, 200000, '2025-11-23 23:49:10'),
(8, 8, 8, 1, 550000, '2025-11-23 23:49:10'),
(9, 9, 9, 1, 1100000, '2025-11-23 23:49:10'),
(10, 10, 10, 3, 120000, '2025-11-23 23:49:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` decimal(12,0) DEFAULT NULL,
  `sale_price` decimal(12,0) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `short_description` text,
  `brand` varchar(255) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `is_active` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `title`, `price`, `sale_price`, `image`, `description`, `short_description`, `brand`, `stock`, `created_at`, `updated_at`, `slug`, `is_active`) VALUES
(1, 1, 'Kính Thời Trang A1', 300000, 250000, 'img/a1.jpg', 'Mẫu kính đẹp A1', 'Kính thời trang A1', 'BrandA', 50, '2025-11-23 23:49:10', '2025-11-23 23:49:10', 'kinh-thoi-trang-a1', 1),
(2, 2, 'Kính Râm B1', 350000, 300000, 'img/b1.jpg', 'Kính râm chống UV', 'Kính râm B1', 'BrandB', 40, '2025-11-23 23:49:10', '2025-11-23 23:49:10', 'kinh-ram-b1', 1),
(3, 3, 'Kính Cận C1', 400000, 350000, 'img/c1.jpg', 'Kính cận siêu nhẹ', 'Kính cận C1', 'BrandC', 60, '2025-11-23 23:49:10', '2025-11-23 23:49:10', 'kinh-can-c1', 1),
(4, 4, 'Kính Bảo Hộ D1', 200000, 180000, 'img/d1.jpg', 'Bảo vệ mắt khi làm việc', 'Kính bảo hộ D1', 'BrandD', 70, '2025-11-23 23:49:10', '2025-11-23 23:49:10', 'kinh-bao-ho-d1', 1),
(5, 5, 'Kính Nam E1', 450000, 400000, 'img/e1.jpg', 'Phong cách mạnh mẽ', 'Kính nam E1', 'BrandE', 35, '2025-11-23 23:49:10', '2025-11-23 23:49:10', 'kinh-nam-e1', 1),
(6, 6, 'Kính Nữ F1', 500000, 450000, 'img/f1.jpg', 'Sang trọng nữ tính', 'Kính nữ F1', 'BrandF', 45, '2025-11-23 23:49:10', '2025-11-23 23:49:10', 'kinh-nu-f1', 1),
(7, 7, 'Kính Trẻ Em G1', 250000, 200000, 'img/g1.jpg', 'Kính an toàn cho trẻ', 'Kính trẻ em G1', 'BrandG', 80, '2025-11-23 23:49:10', '2025-11-23 23:49:10', 'kinh-tre-em-g1', 1),
(8, 8, 'Kính Chống Ánh Sáng Xanh H1', 600000, 550000, 'img/h1.jpg', 'Giảm mỏi mắt', 'Kính chống ánh sáng xanh H1', 'BrandH', 55, '2025-11-23 23:49:10', '2025-11-23 23:49:10', 'kinh-chong-anh-sang-xanh-h1', 1),
(9, 9, 'Kính Cao Cấp I1', 1200000, 1100000, 'img/i1.jpg', 'Chất lượng đỉnh cao', 'Kính cao cấp I1', 'BrandI', 25, '2025-11-23 23:49:10', '2025-11-23 23:49:10', 'kinh-cao-cap-i1', 1),
(10, 10, 'Phụ Kiện Kính J1', 150000, 120000, 'img/j1.jpg', 'Phụ kiện kính J1', 'Phụ kiện J1', 'BrandJ', 90, '2025-11-23 23:49:10', '2025-11-23 23:49:10', 'phu-kien-kinh-j1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` enum('customer','admin') DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `full_name`, `password`, `email`, `phone`, `address`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'Nguyen Van A', 'pass', 'user1@gmail.com', '0900000001', 'HN', 'customer', 1, '2025-11-23 23:49:10', '2025-11-23 23:49:10'),
(2, 'user2', 'Tran Thi B', 'pass', 'user2@gmail.com', '0900000002', 'HCM', 'customer', 1, '2025-11-23 23:49:10', '2025-11-23 23:49:10');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `detail_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ràng buộc đối với các bảng kết xuất
--

--
-- Ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
