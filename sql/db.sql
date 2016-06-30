-- 生成bookonline数据库

-- 数据库: 'bookonline'
CREATE DATABASE IF NOT EXISTS `bookonline` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use `bookonline`;

-- 表：book
DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
    `bookid` bigint primary key not null auto_increment,
    `name` varchar(50) not null,
    `author` varchar(50),
    `file_fomat` varchar(10) not null,
    `category_flag` varchar(100) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

