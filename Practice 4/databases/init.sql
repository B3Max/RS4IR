CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT,DELETE ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;
CREATE TABLE IF NOT EXISTS users (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  password VARCHAR(40) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO users (name, password)
SELECT * FROM (SELECT 'Max', '{SHA}QL0AFWMIX8NRZTKeof9cXsvbvu8=') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Max' AND password= '{SHA}QL0AFWMIX8NRZTKeof9cXsvbvu8='
) LIMIT 1;

INSERT INTO users (name, password)
SELECT * FROM (SELECT 'Bob', 'Bob1') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Bob' AND password = 'Bob1'
) LIMIT 1;

INSERT INTO users (name, password)
SELECT * FROM (SELECT 'Rover', 'Rover1') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Rover' AND password= 'Rover1'
) LIMIT 1;

INSERT INTO users (name, password)
SELECT * FROM (SELECT 'Kate', 'Yandson') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Kate' AND password = 'Yandson'
) LIMIT 1;

INSERT INTO users (name, password)
SELECT * FROM (SELECT 'Lilo', 'Black') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Lilo' AND password = 'Black'
) LIMIT 1;


USE appDB;
CREATE TABLE IF NOT EXISTS books (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(20) NOT NULL,
  author VARCHAR(40) NOT NULL,
  taken tinyint not NULL,
  PRIMARY KEY (ID)
);


INSERT INTO books (title, author, taken)
SELECT * FROM (SELECT '1984', 'George Oruel',0) AS tmp
WHERE NOT EXISTS (
    SELECT title FROM books WHERE title = '1984' AND author = 'George Oruel'
) LIMIT 1;

INSERT INTO books (title, author, taken)
SELECT * FROM (SELECT 'Instructions', 'Smart man',1) AS tmp
WHERE NOT EXISTS (
    SELECT title FROM books WHERE title = 'Instructions' AND author = 'Smart man'
) LIMIT 1;


USE appDB;
CREATE TABLE IF NOT EXISTS orders (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  book_id INT(20) NOT NULL,
  date_end TEXT(20) NOT NULL,
  user_id INT(20) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO orders 
VALUES (1, 1, "20.10.2022", 1);