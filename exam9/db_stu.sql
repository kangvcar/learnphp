-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 03 月 25 日 15:00
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db_stu`
--
CREATE DATABASE IF NOT EXISTS `db_stu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_stu`;

-- --------------------------------------------------------

--
-- 表的结构 `tb_grade`
--

CREATE TABLE IF NOT EXISTS `tb_grade` (
  `xh` char(8) NOT NULL COMMENT '学号',
  `km` varchar(20) NOT NULL COMMENT '科目',
  `cj` float NOT NULL COMMENT '成绩',
  PRIMARY KEY (`xh`,`km`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='成绩表';

--
-- 转存表中的数据 `tb_grade`
--

INSERT INTO `tb_grade` (`xh`, `km`, `cj`) VALUES
('07120101', 'PHP', 68),
('07120102', 'PHP', 70),
('07120801', 'PHP', 80),
('07120801', '网页设计', 80),
('07120901', 'PHP', 90),
('07120901', '数据库SQL', 90),
('07120903', '数据库SQL', 86),
('07120903', '网页设计', 60);

-- --------------------------------------------------------

--
-- 表的结构 `tb_stuinf`
--

CREATE TABLE IF NOT EXISTS `tb_stuinf` (
  `xh` char(8) NOT NULL COMMENT '学号',
  `xm` varchar(10) NOT NULL COMMENT '姓名',
  PRIMARY KEY (`xh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_stuinf`
--

INSERT INTO `tb_stuinf` (`xh`, `xm`) VALUES
('07120101', '小红'),
('07120102', '小王'),
('07120801', '小李'),
('07120802', '小陈'),
('07120901', '张三'),
('07120902', '李四'),
('07120903', '小明');

--
-- 限制导出的表
--

--
-- 限制表 `tb_grade`
--
ALTER TABLE `tb_grade`
  ADD CONSTRAINT `tb_grade_ibfk_1` FOREIGN KEY (`xh`) REFERENCES `tb_stuinf` (`xh`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
