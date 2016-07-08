DROP DATABASE IF EXISTS `arifulmd`;
CREATE DATABASE `arifulmd` DEFAULT CHARSET=utf8;
USE `arifulmd`;
CREATE TABLE `contatti`(
    `id` INTEGER AUTO_INCREMENT PRIMARY KEY,
    `email` VARCHAR(255) NOT NULL ,  
    `richiesta` varchar(255)NOT NULL
)ENGINE=InnoDB;