CREATE DATABASE IF NOT EXISTS appDB2;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON appDB2.* TO 'user'@'%';
FLUSH PRIVILEGES;
set names 'utf8';
CREATE TABLE IF NOT EXISTS users (user char(191) not null, passwd char(191), primary key (user));
INSERT INTO users VALUE ('max', '{SHA}fCIvspJ9goryL1khNOiTJIBjfA0='); 

CREATE TABLE `books` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`author` VARCHAR(200),
	`name` VARCHAR(200),
	PRIMARY KEY (`id`)
);
INSERT INTO books VALUE (NULL, 'Лев Толстой', 'Воина и мир'); 
INSERT INTO books VALUE (NULL, 'Даниель Дефо', 'Робинзон Крузо'); 
INSERT INTO books VALUE (NULL, 'Михаил Булгаков', 'Мастер и Маргарита'); 
INSERT INTO books VALUE (NULL, 'Джордж Оруэлл', '1984'); 
INSERT INTO books VALUE (NULL, 'Айн Рэнд', 'Атлант расправил плечи'); 
INSERT INTO books VALUE (NULL, 'Артур Конан Дойл', 'Приключения Шерлока Холмса'); 