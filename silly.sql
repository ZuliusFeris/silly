-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 05:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silly`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Nhà hàng'),
(2, 'Sự kiện'),
(3, 'Thông báo'),
(4, 'Thế giới'),
(5, 'Đánh giá');

-- --------------------------------------------------------

--
-- Table structure for table `categoryfood`
--

CREATE TABLE `categoryfood` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoryfood`
--

INSERT INTO `categoryfood` (`id`, `name`) VALUES
(1, 'Đồ ngọt'),
(2, 'Món ăn chính'),
(3, 'Món ăn phụ'),
(4, 'Đặc biệt\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `picture`, `name`, `description`, `price`, `categoryid`) VALUES
(11, '1-trung-shutterstock-3834.jpg', 'Trứng', 'Trứng công nghiệp, tự nhiên, được kiểm định chất lượng trước khi đưa vào sử dụng', 1, 3),
(13, '10-mon-com-thuan-viet-khong-the-bo-qua-trong-doi-2.jpg', 'Cớm cháy', 'Món ăn dành cho các tính đồ ăn vặt', 2, 4),
(14, '330990704_2363449900479952_8573534578965347843_n.jpg', 'Saximi hãi sản của Nhật', 'Món ăn được nhập từ nhật bản, được bảo quản tốt trong môi trường lạnh dưới -10 độ, nên thực phẩm rất tốt.', 30, 4),
(15, 'Buk-Buk-9-copy-scaled.jpg', 'Món ăn phương Tây', 'Như là một nhà hàng chuyên về các món ăn nhập khẩu thì Món An phương Tây không phải là món xa lạ đối với nhà hàng phương chúng tôi', 40, 2),
(16, 'xoidoxanhnuoccotdua4.jpg', 'Món tráng miệng', 'Món ngọt dễ ăn với mọi lứa tuổi.', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groupadmin`
--

CREATE TABLE `groupadmin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupadmin`
--

INSERT INTO `groupadmin` (`id`, `name`) VALUES
(1, 'Quản trị viên'),
(2, 'Biên tập viên'),
(3, 'Báo cáo viên');

-- --------------------------------------------------------

--
-- Table structure for table `grouprole`
--

CREATE TABLE `grouprole` (
  `id` int(11) NOT NULL,
  `groupid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grouprole`
--

INSERT INTO `grouprole` (`id`, `groupid`, `roleid`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 1, 2),
(4, 1, 3),
(5, 1, 4),
(6, 1, 5),
(7, 1, 6),
(8, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `userPass` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `groupid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `userName`, `userPass`, `picture`, `groupid`) VALUES
(1, 'Huỳnh Trọng', 'huynhtrong', 'c4ca4238a0b923820dcc509a6f75849b', 'trong.jpg\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `publisheddate` date NOT NULL,
  `description` text NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `picture`, `publisheddate`, `description`, `categoryid`) VALUES
(11, 'Cách đồng hoa Violet', '2.jpg', '2023-03-08', 'Sự kiện cách đồng hoa Khi đến với nhà hàng thực khách sẽ được thưởng thức không gian trong nhà hàng như ở cách đồng hoa', 2),
(12, 'Hội thi đấu Hakudori', '1681516.jpg', '2023-03-08', 'Hakudori một loại hình nghệ thuật đặt biệt của nhà hàng kèm theo nhiều phần thưởng khi bạn tích đủ sao trong tro chơi', 3),
(13, 'Nghệ thuật không gian', 'hinh-anh-dep-1.jpg', '2023-03-08', 'Thật tuyệt vời khi ngấm nhìn không gian trong khi đang thưởng thức các món ăn', 5),
(14, 'Sự kiện Valentine', 'hinh-anh-dep-4.jpg', '2023-03-08', 'Sự kiện dành cho các cặp đôi đang yêu nhau', 2),
(15, 'Lịch trình du lịch khi thắng sự kiện Hakudori', 'lieu-co-phai-chup-anh-duoi-ca-hai-dinh-dang-jpeg-va-raw-la-ban-mot-mui-ten-trung-hai-dich-02.jpg', '2023-03-08', 'Một chuyến nghĩ đưỡng tại đão Kokori', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `picture`, `name`, `description`, `price`, `categoryid`) VALUES
(1, '01.jpg', 'Rau trộn salad', '', 4, 1),
(2, '02.jpg', 'Bánh pizza tây', '', 9, 1),
(3, '03.jpg', 'Món trán miệng', '', 2, 1),
(4, '04.jpg', 'Rau cãi xào', '', 3, 2),
(5, '05.jpg', 'Thịt viên', '', 1, 2),
(6, '06.jpg', 'Đồ ngọt', '', 9, 2),
(7, '07.jpg', 'Thực phẩm xanh', '', 10, 3),
(8, '08.jpg', 'Ăn vặt', '', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `controller`, `action`) VALUES
(1, 'Trang lỗi', 'pages', 'error'),
(2, 'Trang chủ', 'pages', 'home'),
(3, 'Food', 'foods', 'index'),
(4, 'Tin tức', 'news', 'index'),
(5, 'Chi tiết food', 'foods', 'edit'),
(6, 'Chi tiết tin tức', 'news', 'edit'),
(7, 'Nhóm ', 'groups', 'index');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `position` varchar(100) NOT NULL,
  `detailsCV` varchar(200) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `position`, `detailsCV`, `picture`) VALUES
(1, 'Jenyfer Alert', 'Chủ nhà hàng', 'Chủ nhà hàn kiêm người hướng dẫn khách hàng vip', 'about-01.jpg'),
(2, 'Bander Vander', 'Trưởng bếp', 'Người đứng chính trong bếp', 'about-02.jpg'),
(3, 'Veres Calesti', 'Phó bếp', 'Phụ bếp cho trưởng bếp', 'about-03.jpg'),
(4, 'FoundS FerisD', 'Trưởng phòng tiếp thị', 'Người giới thiệu nhà hàng đến với mọi người\r\n', 'about-04.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryfood`
--
ALTER TABLE `categoryfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupadmin`
--
ALTER TABLE `groupadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grouprole`
--
ALTER TABLE `grouprole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categoryfood`
--
ALTER TABLE `categoryfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `grouprole`
--
ALTER TABLE `grouprole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
