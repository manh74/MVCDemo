drop database if exists MVC;
create database MVC;
use MVC;

drop table if exists User;
create table User(
  id int auto_increment primary key,
  fullName varchar(255),
  username varchar(255),
  password varchar(255)
  );

insert into  User values
(1,'Nguyen Manh','14052k','67896789'),
(2,'Nguyen Thien Phuc','admin','phucphuc'),
(3,'Phan Van Linh','linh','linhlinh'),
(4,'Vo Cong Dinh','dinhdinh','12345678');