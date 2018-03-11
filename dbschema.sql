DROP DATABASE IF EXISTS db_users;
CREATE DATABASE db_users;
USE db_users;
CREATE TABLE tbl_users(
	uname varchar(255) primary key,
	uname varchar(1024),
	message varchar(1024)
);
