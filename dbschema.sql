DROP DATABASE IF EXISTS db_users;
CREATE DATABASE db_user;
USE db_user;
CREATE TABLE tbl_user(
	uname varchar(255) primary key,
	message varchar(1024),
);
