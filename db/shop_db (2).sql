-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2023 at 03:26 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `tieude` varchar(255) collate utf8_unicode_ci NOT NULL,
  `noidung` varchar(1000) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(11) NOT NULL auto_increment,
  `name` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name`) VALUES
(3, 'Áo thun'),
(4, 'Áo sơ mi'),
(5, 'Áo hoodie'),
(6, 'Áo len'),
(7, 'Áo polo'),
(8, 'Quần jean'),
(9, 'Quần tây'),
(10, 'Quần short'),
(11, 'Quần nỉ'),
(12, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `id_tran` varchar(255) collate utf8_unicode_ci NOT NULL,
  `id_product` varchar(255) collate utf8_unicode_ci NOT NULL,
  `qty` varchar(255) collate utf8_unicode_ci NOT NULL,
  `amout` float NOT NULL,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `id_tran`, `id_product`, `qty`, `amout`, `title`, `total`) VALUES
(1, 'minhha123', '5', '1', 199000, 'Áo Polo Dry Vải Pique Ngắn Tay - Đỏ', 199000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL auto_increment,
  `id_category` int(11) NOT NULL,
  `title` varchar(255) collate utf8_unicode_ci NOT NULL,
  `quantity` int(4) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `image` varchar(255) collate utf8_unicode_ci NOT NULL,
  `description` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `id_category`, `title`, `quantity`, `price`, `discount`, `image`, `description`) VALUES
(1, 3, 'Áo Thun Vải Supima Cotton Cổ V Ngắn Tay - Đỏ', 20, 399000, 349000, '1682930693_vngoods_17_457161_11zon.jpg', 'Áo thun cotton Supima® 100% cao cấp của chúng tôi, đã được cập nhật thành loại vải bền hơn.\r\n- Cập nhật chất liệu vải bền hơn với lớp phủ cao cấp.\r\n- Cotton Supima® 100% mềm mịn, chống vón cục.\r\n- Phong cách thiết kế cơ bản có thể mặc riêng lẻ hoặc nhiều lớp.\r\n- Được thiết kế tỉ mỉ đến từng chi tiết, từ độ rộng cổ áo và các đường chỉ may.\r\n- Cổ chữ V.'),
(2, 3, 'Áo Thun Vải Supima Cotton Cổ V Ngắn Tay - Trắng', 20, 399000, 249000, '1682931149_vngoods_00_457161_11zon.jpg', 'Áo thun cotton Supima® 100% cao cấp của chúng tôi, đã được cập nhật thành loại vải bền hơn.\r\n- Cập nhật chất liệu vải bền hơn với lớp phủ cao cấp.\r\n- Cotton Supima® 100% mềm mịn, chống vón cục.\r\n- Phong cách thiết kế cơ bản có thể mặc riêng lẻ hoặc nhiều lớp.\r\n- Được thiết kế tỉ mỉ đến từng chi tiết, từ độ rộng cổ áo và các đường chỉ may.\r\n- Cổ chữ V.'),
(3, 3, 'Áo Thun Vải Supima Cotton Cổ V Ngắn Tay - Xanh Lá', 20, 399000, 349000, '1682931234_vngoods_54_457161_11zon.jpg', 'Áo thun cotton Supima® 100% cao cấp của chúng tôi, đã được cập nhật thành loại vải bền hơn.\r\n- Cập nhật chất liệu vải bền hơn với lớp phủ cao cấp.\r\n- Cotton Supima® 100% mềm mịn, chống vón cục.\r\n- Phong cách thiết kế cơ bản có thể mặc riêng lẻ hoặc nhiều lớp.\r\n- Được thiết kế tỉ mỉ đến từng chi tiết, từ độ rộng cổ áo và các đường chỉ may.\r\n- Cổ chữ V.'),
(4, 3, 'Áo Thun Vải Supima Cotton Cổ V Ngắn Tay - Xanh', 10, 399000, 249000, '1682931414_vngoods_61_457161_11zon.jpg', 'Áo thun cotton Supima® 100% cao cấp của chúng tôi, đã được cập nhật thành loại vải bền hơn.\r\n- Cập nhật chất liệu vải bền hơn với lớp phủ cao cấp.\r\n- Cotton Supima® 100% mềm mịn, chống vón cục.\r\n- Phong cách thiết kế cơ bản có thể mặc riêng lẻ hoặc nhiều lớp.\r\n- Được thiết kế tỉ mỉ đến từng chi tiết, từ độ rộng cổ áo và các đường chỉ may.\r\n- Cổ chữ V.'),
(5, 7, 'Áo Polo Dry Vải Pique Ngắn Tay - Đỏ', 10, 299000, 199000, '1682931554_goods_15_455676_11zon.jpg', 'Thiết kế kẻ sọc vui nhộn với màu sắc tương phản. Đã cập nhật đường cắt cho một phong cách bình thường hơn.'),
(6, 7, 'AIRism Áo Polo Gài Nút - Trắng', 10, 349000, 249000, '1682931732_vngoods_00_457834_11zon.jpg', 'Siêu mịn, nhẹ và mát. Mặc nó với một chiếc áo sơ mi cho một phong cách thanh lịch.\r\n- Mặt ngoài được làm bằng cotton mịn và mặt trong mịn màng và thoải mái.\r\n- Công nghệ Cool Touch và công nghệ DRY khô nhanh.\r\n- Vải tạo ra một kiểu dáng đẹp mắt.\r\n- Cổ áo kiểu áo sơ mi đẹp.\r\n- Cổ áo đã được thiết kế để trông tuyệt vời ngay cả khi mở nút.\r\n- Mặc nó với một chiếc áo khoác để có phong cách công sở.\r\n- Độ dài và đường cắt là hoàn hảo để mặc áo giấu trong hoặc thả ngoài.'),
(7, 7, 'AIRism Áo Polo Gài Nút - Xám', 10, 349000, 249000, '1682931946_goods_06_457834_11zon.jpg', 'Siêu mịn, nhẹ và mát. Mặc nó với một chiếc áo sơ mi cho một phong cách thanh lịch.\r\n- Mặt ngoài được làm bằng cotton mịn và mặt trong mịn màng và thoải mái.\r\n- Công nghệ Cool Touch và công nghệ DRY khô nhanh.\r\n- Vải tạo ra một kiểu dáng đẹp mắt.\r\n- Cổ áo kiểu áo sơ mi đẹp.\r\n- Cổ áo đã được thiết kế để trông tuyệt vời ngay cả khi mở nút.\r\n- Mặc nó với một chiếc áo khoác để có phong cách công sở.\r\n- Độ dài và đường cắt là hoàn hảo để mặc áo giấu trong hoặc thả ngoài.'),
(8, 5, 'AIRism Áo Khoác Khóa Kéo Chống UV (Chống Nắng) - Vàng', 12, 349000, 249000, '1682932290_vngoods_43_455412_11zon.jpg', 'Cảm giác êm ái, dễ chịu. Một chiếc áo len giản dị có kiểu dáng như một lớp khoác bên ngoài và giúp bảo vệ khỏi ánh nắng mặt trời.\r\n- Bề mặt Được làm bằng cotton slub sử dụng sợi có các tone màu xám khác nhau để tạo vẻ giản dị, cùng ''AIRism'' mịn màng khi chạm vào.\r\n-bao gồm các tính năng UV-Cut và cool Touch.\r\n-Đáp ứng phản hồi của khách hàng, khóa kéo phía trước đã Được cập nhật để dễ dàng đóng mở.\r\n-Được Thiết kế để sử dụng thông thường như áo nỉ.\r\n-Túi bên trên các Đường may để tạo Kiểu dáng đẹp.'),
(9, 4, 'Áo Kiểu Vải Rayon In Họa Tiết Dài Tay', 20, 599000, 499000, '1683099193_a1_11zon.jpg', 'Cất liệu 100% rayon mềm mại. Chống nhăn để dễ dàng bảo quản.Chỉnh lại form áo để phơi khô sau khi giặt. Thiết kế cơ bản, đa năng. Họa tiết chấm bi. Một chiếc áo đa năng cho phong cách trang trọng hoặc giản dị. Trông thật tuyệt khi mặc cùng áo len, hoặc được tạo kiểu như một lớp khoác nhẹ nhàng bên ngoài.'),
(10, 4, 'Áo Kiểu Vải Rayon Ngắn Tay', 20, 599000, 499000, '1683099873_a2_11zon.jpg', ' Chất vải pha rayon mềm mịn. Chống nhăn để dễ bảo quản.'),
(11, 4, 'Áo Kiểu Tunic Lụa Cotton Cổ Trụ Dài Tay', 10, 1299000, 799000, '1683099975_a3_11zon.jpg', 'Từ bộ sưu tập hợp tác Ines de la Fressange của chúng tôi, với sức hấp dẫn vượt thời gian của phong cách Pháp sang trọng.'),
(12, 4, 'Áo Kiểu Vải Rayon Lawn Cổ V In Hoạ Tiết Ngắn Tay', 5, 799000, 699000, '1683100062_a4_11zon.jpg', 'Áo kiểu thanh lịch với cổ chữ V phẳng phiu và eo ôm sát.'),
(13, 4, 'Áo Kiểu Vải Rayon Cổ Pintuck Dài Tay', 5, 799000, 699000, '1683100208_a5_11zon.jpg', 'HƯỚNG DẪN GIẶT:Giặt máy nước lạnh, giặt nhẹ, Giặt khô\r\n'),
(14, 5, 'Áo Khoác Nỉ Có Mũ Chui Đầu Dài Tay', 10, 799000, 699000, '1683100346_a6_11zon.jpg', 'A stylish sweatshirt with a cozy lining and authentic details.'),
(15, 5, 'Áo Khoác Nỉ Siêu Co Giãn Dry Có Mũ Kéo Khóa Dài Tay', 10, 799000, 499000, '1683100425_a7_11zon.jpg', 'Dựa trên phản hồi của khách hàng, chúng tôi đã cập nhật áo với khả năng chống nhăn và trông tự nhiên hơn, phù hợp để mặc hàng ngày.'),
(16, 5, 'Áo Khoác Nỉ Siêu Co Giãn Dry Có Mũ Kéo Khóa Dài Tay', 20, 799000, 699000, '1683100527_a8_11zon.jpg', 'A new take on sweats with a cool style that’s not too casual. Exceptional functionality plus long-lasting comfort.'),
(18, 5, 'Áo Nỉ Có Mũ Dài Tay Khóa Kéo', 10, 799000, 699000, '1683100777_11_11zon.jpg', 'Kiểu dáng hiện đại trên chiếc áo len thoải mái cổ điển. Lớp áo hoàn hảo để mặc ở bất cứ đâu.'),
(19, 6, 'Áo Len Dệt 3D Vải Mắt Lưới Cổ Tròn Dài Tay', 5, 799000, 499000, '1683100976_12_11zon.jpg', '58% Acrylic, 26% Lyocell, 16% Lanh'),
(20, 6, 'Áo Len Dệt 3D Vải Pha Cotton Cổ V Tay Lửng 3/4', 5, 799000, 699000, '1683101068_12_11zon (1).jpg', 'Một chiếc áo len dệt kim 3D liền mạch để tạo sự thoải mái. Có thể kết hợp cùng nhiều loại quần, đa dạng phong cách.'),
(21, 6, 'Áo Len Dệt 3D Cotton Tay Phồng', 5, 799000, 499000, '1683101209_13_11zon.jpg', 'Kỹ thuật đan 3D của chúng tôi tạo ra kiểu dáng trang nhã. Một chiếc áo len phong cách.'),
(22, 6, 'Áo Vest Dáng Dài', 10, 1299000, 999000, '1683101348_14_11zon.jpg', 'Chất liệu thun cotton thoáng mát, dễ chịu. Sọc tạo điểm nhấn hai tông màu.'),
(23, 6, 'Áo Cardigan Dài Tay', 20, 1299000, 999000, '1683101460_15_11zon.jpg', 'Chất liệu thun cotton thoáng mát, dễ chịu. Sọc tạo điểm nhấn hai tông màu.'),
(24, 8, 'Quần Jeans Ống Cong', 5, 1299000, 799000, '1683101599_1a_11zon.jpg', 'Quần jean vừa vặn hoàn hảo với đường cắt cong đặc biệt. Kiểu dáng denim cổ điển.'),
(25, 8, 'Quần Jean Dáng Skinny Cạp Cao Siêu Co Giãn', 20, 1299000, 799000, '1683101827_2a_11zon.jpg', 'Quần jean co giãn mang đến sự thoải mái và vừa vặn. Cập nhật chi tiết cho một vẻ ngoài tinh tế hơn.'),
(26, 8, 'Quần Boyfriend Ống Ôm Dần', 10, 1299000, 699000, '1683102024_3a_11zon.jpg', 'New relaxed fit and distressed finish. Roll up the hems for a casual style.'),
(27, 9, 'AirSense Quần Dài (Siêu Nhẹ)', 20, 1299000, 699000, '1683103311_4a_11zon.jpg', 'Quần chất lượng cao vô cùng thoải mái. Kiểu dáng thời thượng thích hợp khi mặc ở văn phòng.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_role`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `id_tran` varchar(255) collate utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(255) collate utf8_unicode_ci NOT NULL,
  `address` varchar(255) collate utf8_unicode_ci NOT NULL,
  `city` varchar(255) collate utf8_unicode_ci NOT NULL,
  `district` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`id`, `id_tran`, `firstname`, `lastname`, `email`, `phone`, `address`, `city`, `district`) VALUES
(1, 'minhha123', 'minh', 'minhha', '', '123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(200) collate utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(15) collate utf8_unicode_ci NOT NULL,
  `address` varchar(255) collate utf8_unicode_ci NOT NULL,
  `password` varchar(35) collate utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `fullname`, `email`, `phone`, `address`, `password`, `role_id`) VALUES
(2, 'minh', 'tran huu minh', 'tranhuuminh71@gmail.com', '1234555', 'PT', '87939804ae7b49e62b47a798e7cd0511', 1),
(3, 'tien', 'quoctien', 'quoctienn', '00009', 'VL', '2a26569e98b26668f39e98e6baef2d54', 1),
(4, 'khach', 'jkk', 'kkj', '002022', 'jf', '6ab25aa94162ceb52099461e2b9bc863', 2);
