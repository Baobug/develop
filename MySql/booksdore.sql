-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2025-12-01 08:50:26
-- 服务器版本： 8.0.39-0kylin0.20.04.1k0.1
-- PHP 版本： 7.4.3-4kylin2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `booksdore`
--

-- --------------------------------------------------------

--
-- 表的结构 `books`
--

CREATE TABLE `books` (
  `bookcode` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorycode` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bookname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publishdate` date NOT NULL,
  `price` float(5,2) NOT NULL,
  `number` int NOT NULL,
  `discount` float(3,2) NOT NULL,
  `pic` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `books`
--

INSERT INTO `books` (`bookcode`, `categorycode`, `bookname`, `autor`, `publisher`, `publishdate`, `price`, `number`, `discount`, `pic`) VALUES
('tb0010001', 'tb001', '理想国', '柏拉图', '教育出版社', '2021-01-01', 48.00, 10, 0.90, NULL),
('tb0010002', 'tb001', '苏菲的世界', '贾德', '人民出版社', '2021-09-10', 51.00, 5, 0.90, NULL),
('tg0010001', 'tg001', '三字经', NULL, '江苏出版社', '2021-01-01', 28.00, 10, 0.60, NULL),
('tg0010002', 'tg001', '弟子规', NULL, '浙江教育出版社', '2021-09-10', 18.00, 50, 0.90, NULL),
('tg0010003', 'tg001', '国学启蒙', '张新', '浙江教育出版社', '2020-09-10', 18.00, 50, 0.90, NULL),
('tp0010001', 'tp001', '计算机导论', '张力', '人民邮电出版社', '2023-02-03', 56.00, 2, 0.70, NULL),
('tp0010002', 'tp001', '操作系统概论', '刘小平', '高等教育出版社', '2021-02-03', 56.00, 20, 0.70, NULL),
('tp0020001', 'tp002', 'C语言程序设计', '谭浩强', '清华大学出版社', '2024-01-01', 51.00, 10, 0.80, NULL),
('tp0020002', 'tp002', 'Python程序设计', '李东', '清华大学出版社', '2024-04-01', 59.00, 3, 0.80, NULL),
('tp0020003', 'tp002', 'JAVA程序设计', '黑马', '人民邮电出版社', '2024-05-01', 49.90, 10, 0.85, NULL),
('tp0020004', 'tp002', 'JAVA项目开发实战', '赵莉', '人民邮电出版社', '2023-06-01', 38.00, 5, 0.70, NULL),
('tp0020005', 'tp002', 'Python自动化实例教程', '张霞', '机械工业出版社', '2021-10-20', 57.00, 100, 0.90, NULL),
('tp0020006', 'tp002', 'C语言项目开发', '李大力', '机械出版社', '2024-01-01', 48.00, 10, 0.60, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `categorycode` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`categorycode`, `categoryname`, `note`) VALUES
('tb001', '哲学类', NULL),
('tg001', '国学类', NULL),
('tj001', '经济类', NULL),
('tp001', '计算机类', NULL),
('tp002', '计算机程序类', 'C语言设计'),
('tq001', '宗教类', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `details`
--

CREATE TABLE `details` (
  `ordercode` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookcode` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `details`
--

INSERT INTO `details` (`ordercode`, `bookcode`, `number`) VALUES
('240301001', 'tb0010001', 1),
('240301001', 'tb0010002', 1),
('240301001', 'tg0010003', 1),
('240301001', 'tp0020001', 2),
('240310001', 'tp0020001', 1),
('240323001', 'tg0010001', 1),
('240329001', 'tb0010001', 2),
('240329001', 'tg0010003', 1),
('240329002', 'tp0010001', 1),
('240410001', 'tp0010002', 1),
('240410002', 'tb0010001', 1),
('240410002', 'tb0010002', 1),
('240410003', 'tp0020004', 3),
('240411001', 'tg0010002', 1),
('240411002', 'tb0010002', 2);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `ordercode` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usercode` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_state` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`ordercode`, `usercode`, `order_state`, `order_time`) VALUES
('240301001', '001', '已收货', '2024-03-01 09:23:00'),
('240310001', '002', '已收货', '2024-03-10 12:23:00'),
('240323001', '003', '已收货', '2024-03-23 15:23:00'),
('240329001', '004', '已收货', '2024-03-29 18:23:00'),
('240329002', '001', '已收货', '2024-03-29 21:23:00'),
('240410001', '002', '待付款', '2024-04-10 11:23:00'),
('240410002', '007', '已发货', '2024-04-10 12:23:00'),
('240410003', '007', '待发货', '2024-04-10 15:23:00'),
('240411001', '004', '已发货', '2024-04-11 18:23:00'),
('240411002', '006', '待发货', '2024-04-11 21:23:00');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `usercode` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwd` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` char(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reginTime` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`usercode`, `username`, `passwd`, `tel`, `gender`, `reginTime`) VALUES
('001', '王铭', '123456', '18545621234', NULL, NULL),
('002', '王达明', '123456', '18845621234', '男', '2024-01-01'),
('003', '李萍', '666666', '15165621234', '女', '2023-01-01'),
('004', '赵一一', '666666', '15265621234', '男', '2022-01-01'),
('005', '张张总', '1213', '15365621234', '男', '2023-01-01'),
('006', '爱笑的鱼儿', '456', '15465621234', '女', '2022-11-01'),
('007', '女字姗', '456', '15565621234', '女', '2024-11-01');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `vm_books`
-- （参见下面的实际视图）
--
CREATE TABLE `vm_books` (
`autor` varchar(20)
,`bookname` varchar(30)
,`price` float(5,2)
,`publisher` varchar(30)
);

-- --------------------------------------------------------

--
-- 替换视图以便查看 `vm_books2`
-- （参见下面的实际视图）
--
CREATE TABLE `vm_books2` (
`authorname` varchar(20)
,`bname` varchar(30)
,`bprice` float(5,2)
,`bpub` varchar(30)
);

-- --------------------------------------------------------

--
-- 替换视图以便查看 `vw_book`
-- （参见下面的实际视图）
--
CREATE TABLE `vw_book` (
`autor` varchar(20)
,`bookcode` char(10)
,`bookname` varchar(30)
,`price` float(5,2)
,`publisher` varchar(30)
);

-- --------------------------------------------------------

--
-- 视图结构 `vm_books`
--
DROP TABLE IF EXISTS `vm_books`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vm_books`  AS  select `books`.`bookname` AS `bookname`,`books`.`price` AS `price`,`books`.`publisher` AS `publisher`,`books`.`autor` AS `autor` from `books` ;

-- --------------------------------------------------------

--
-- 视图结构 `vm_books2`
--
DROP TABLE IF EXISTS `vm_books2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vm_books2` (`bname`, `bprice`, `bpub`, `authorname`) AS   select `books`.`bookname` AS `bookname`,`books`.`price` AS `price`,`books`.`publisher` AS `publisher`,`books`.`autor` AS `autor` from `books`  ;

-- --------------------------------------------------------

--
-- 视图结构 `vw_book`
--
DROP TABLE IF EXISTS `vw_book`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_book`  AS  select `books`.`bookcode` AS `bookcode`,`books`.`bookname` AS `bookname`,`books`.`price` AS `price`,`books`.`publisher` AS `publisher`,`books`.`autor` AS `autor` from `books` ;

--
-- 转储表的索引
--

--
-- 表的索引 `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookcode`),
  ADD KEY `categorycode` (`categorycode`);

--
-- 表的索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categorycode`);

--
-- 表的索引 `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`ordercode`,`bookcode`),
  ADD KEY `bookcode` (`bookcode`);

--
-- 表的索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordercode`),
  ADD KEY `usercode` (`usercode`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usercode`),
  ADD UNIQUE KEY `tel` (`tel`);

--
-- 限制导出的表
--

--
-- 限制表 `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`categorycode`) REFERENCES `category` (`categorycode`);

--
-- 限制表 `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`ordercode`) REFERENCES `orders` (`ordercode`),
  ADD CONSTRAINT `details_ibfk_2` FOREIGN KEY (`bookcode`) REFERENCES `books` (`bookcode`);

--
-- 限制表 `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`usercode`) REFERENCES `users` (`usercode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
