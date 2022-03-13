DROP DATABASE IF EXISTS `makueni`;
CREATE  DATABASE `makueni`;
USE `makueni`;
SET NAMES utf8;
SET  character_set_client = utf8mb4;
CREATE TABLE `admin`(
  `adminid` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `county` varchar(55) NOT NULL,
  `huduma number` int(55) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mobile number` varchar(20) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE = Innodb DEFAULT CHARSET = utf8mb4;

INSERT INTO `admin` (`fname`,`lname`,`mname`,`huduma number`,
    `mobile number`,`county`,`email`,`password`,`image`)
    VALUES ('Paul','Kimaili','Mutinda','67538442','0765473438','makueni','pkimaili2@gmail.com',12345678,'k.jpg');

CREATE TABLE `user`(
  `uid` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `county` varchar(55) NOT NULL,
  `huduma number` int(55) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `category` VARCHAR(50) NOT NULL,
  `mobile number` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE = Innodb DEFAULT CHARSET = utf8mb4;


INSERT INTO `user` (`fname`,`lname`,`mname`,`huduma number`,
    `mobile number`,`county`,`email`,`password`,`image`,`category`)
    VALUES ('Paul','Kimaili','Mutinda','67538442','0765473438','makueni','pkimaili2@gmail.com',12345678,'k.jpg','student');

CREATE TABLE `application`(
  `aid` int(255) NOT NULL AUTO_INCREMENT,
  `constituency` varchar(30) NOT NULL,
  `village` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id number` int(50) NOT NULL,
  `dob` DATE  NOT NULL,
  `primary school` VARCHAR(55) NOT NULL,
  `pgrade` varchar(25) NOT NULL,
  `high school` varchar(50) NOT NULL,
  `hgrade` VARCHAR(50) NOT NULL,
  `campus` varchar(20) NOT NULL,
  `cgrade` VARCHAR(20) NOT NULL,
  `father fname` VARCHAR(30) NOT  NULL,
  `father lname` VARCHAR(30) NOT NULL,
  `father email` VARCHAR(50) NOT NULL,
  `father constituency` VARCHAR(50) NOT NULL,
  `father employed` VARCHAR(10) NOT NULL,
  `father salary` INT(50) NOT NULL,
  `father dob` date NOT NULL,
  `father id` INT(10) NOT NULL,
  `mother fname` VARCHAR(30) NOT  NULL,
  `mother lname` VARCHAR(30) NOT NULL,
  `mother email` VARCHAR(50) NOT NULL,
  `mother constituency` VARCHAR(50) NOT NULL,
  `mother employed` VARCHAR(10) NOT NULL,
  `mother salary` INT(50) NOT NULL,
  `mother dob` DATE  NOT NULL,
  `mother id` INT(10) NOT NULL,
  `labour provided` VARCHAR(50) NOT NULL,
  `employment status` VARCHAR(50) NOT NULL,
  `place of work` VARCHAR(40) NOT NULL,
  `salary` INT(30) NOT NULL,
  `status` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE = Innodb DEFAULT CHARSET = utf8mb4;

CREATE TABLE `comments`(
`cid` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`comment` LONGTEXT NOT NULL,
`date` DATE  NOT NULL,
`email` varchar(255) NOT NULL

)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;

CREATE TABLE `other`(
`cid` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(50) NOT NULL,
`area` VARCHAR(50) NOT  NULL,
`activity` VARCHAR(30) NOT NULL,
`category` VARCHAR(40) NOT NULL,
`purpose` VARCHAR(50) NOT NULL,
`email` VARCHAR(40) NOT NULL,
`iemail` VARCHAR(40) NOT NULL,
`status` VARCHAR(50) NOT NULL
)ENGINE=Innodb DEFAULT CHARSET=utf8mb4;