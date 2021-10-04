CREATE DATABASE tbl_magazine;
CREATE DATABASE IF NOT EXISTS tbl_magazine CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';
CREATE TABLE IF NOT EXISTS tbl_category_product(
id_category_product INTEGER(11) PRIMARY KEY AUTO_INCREMENT,
title_category_product VARCHAR(100) NOT NULL
);
CREATE TABLE IF NOT EXISTS tbl_product(
id_product INTEGER(11) PRIMARY KEY AUTO_INCREMENT,
title_product VARCHAR(100) NOT NULL,
price_product VARCHAR(100) NOT NULL,
id_category_product INTEGER(100) NOT NULL,
img_product VARCHAR(100) NOT NULL,
desc_category_product text(1000) NOT NULL,
status VARCHAR(100) NOT NULL,
FOREIGN KEY (id_category_product) REFERENCES tbl_category_product(id_category_product)
);
CREATE TABLE IF NOT EXISTS tbl_order(
id_order INTEGER(11) PRIMARY KEY AUTO_INCREMENT,
id_product INTEGER(11) NOT NULL,
quantity_product INTEGER(11) NOT NULL,
FOREIGN KEY (id_product) REFERENCES tbl_product(id_product)
);
CREATE TABLE IF NOT EXISTS tbl_user(
id_account INTEGER(11) PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
fullname VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
phone VARCHAR(100) NOT NULL,
address VARCHAR(100) NOT NULL
);





