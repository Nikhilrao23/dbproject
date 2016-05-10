<?php

$con=mysql_connect("localhost","root","3445") or die (mysql_error());
mysql_query(' create database if not exists inventory_db');
mysql_select_db("inventory_db");

mysql_query('create table if not exists cart (
  cartID bigint(20) NOT NULL AUTO_INCREMENT,
  cartDate date NOT NULL,
  PID bigint(20) NOT NULL,
  Pname varchar(50) DEFAULT NULL,
  PRIMARY KEY (cartID));');

mysql_query('create table if not exists products (
  PID bigint(20) NOT NULL AUTO_INCREMENT,
  Pname varchar(50) NOT NULL,
  Pprice decimal(18,3) NOT NULL,
  Pquantity int(11) NOT NULL,
  PRIMARY KEY (PID));');

mysql_query('create table if not exists Registration (
  Login_as varchar(30) DEFAULT NULL,
  user_id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(30) DEFAULT NULL,
  password varchar(30) DEFAULT NULL,
  PRIMARY KEY (user_id));');

mysql_query('create table if not exists shipping_address (
  SAName varchar(50) NOT NULL,
  city varchar(50) NOT NULL,
  country varchar(50) NOT NULL,
  Reciepname varchar(50) NOT NULL,
  state varchar(50) NOT NULL,
  zip int(5) NOT NULL,
  cartID bigint(20) NOT NULL,
  PRIMARY KEY (SAName,cartID));');





?>
