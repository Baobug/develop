-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2025-11-26 06:39:07
-- 服务器版本： 8.0.44-0ubuntu0.24.04.1
-- PHP 版本： 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `W2400230`
--

-- --------------------------------------------------------

--
-- 表的结构 `students`
--

CREATE TABLE `students` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('男','女') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `class` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intr` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `birthday`, `class`, `major`, `city`, `skill`, `intr`) VALUES
(1, '王一', '男', '2015-10-01', 'W24002', '计算机科学与技术', '山东曲阜', '游泳', '一个非常常见的人'),
(2, '王静', '女', '2015-10-08', 'W24001', '金融学', '浙江绍兴', '羽毛球', ''),
(3, '李嗣源', '男', '2015-10-02', 'W24003', '临床医学', '湖南韶山', '', ''),
(4, '刘心怡', '女', '2016-10-01', 'W24002', '法学', '安徽绩溪', '', ''),
(5, '沈默', '男', '2017-10-04', 'W24005', '机械工程', '江苏苏州', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `user_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` char(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_reg`) VALUES
(1, 'root', '123', '123@qq.com', '2025-11-05 06:27:36'),
(7, '张三', '202cb962ac59075b964b07152d234b70', '123@qq.com', '2025-11-19 06:27:52'),
(17, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '2025-11-26 05:43:44');

--
-- 转储表的索引
--

--
-- 表的索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `students`
--
ALTER TABLE `students`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
