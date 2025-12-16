CREATE database bookstore;
use bookstore;
CREATE TABLE category
(
	categorycode char(10) PRIMARY KEY,
	categoryname varchar(30) NOT NULL,
	note varchar(50)
);
CREATE TABLE books
(
	bookcode char(10) PRIMARY KEY,
	categorycode char(10) ,
	bookname varchar(30) NOT NULL,
	autor varchar(20) ,
	publisher varchar(30) NOT NULL,
	publishdate date NOT NULL,
	price float(5,2) NOT NULL,
	number int NOT NULL,
	discount float(3,2) NOT NULL,
	pic blob,
	FOREIGN KEY(categorycode) REFERENCES category(categorycode)
);
CREATE TABLE users
(
	usercode char(10) PRIMARY KEY,
	username varchar(40) NOT NULL,
	passwd varchar(18) NOT NULL,
	tel char(11) UNIQUE,
	gender char(3),
	reginTime date
);
CREATE TABLE orders
(
	ordercode char(10) PRIMARY key,
	usercode char(10),
	order_state varchar(10) NOT NULL,
	order_time datetime NOT NULL,
	FOREIGN key(usercode) REFERENCES users(usercode)
);
CREATE TABLE details
(
	ordercode char(10),
	bookcode char(10),
	number int NOT NULL,
	PRIMARY key(ordercode,bookcode),
	FOREIGN key(ordercode) REFERENCES orders(ordercode),
	FOREIGN key(bookcode) REFERENCES books(bookcode)
);
DELETE FROM category;
/*图书类别表*/
INSERT INTO category VALUE('tp001','计算机类',NULL);
INSERT INTO category VALUES('tp002','计算机程序类','C语言设计');
INSERT INTO category VALUE('tb001','哲学类',NULL);
INSERT INTO category VALUES('tq001','宗教类',NULL);
INSERT INTO category VALUES('tj001','经济类',NULL);
INSERT INTO category VALUES('tg001','国学类',NULL);

DELETE FROM books;
/*图书表*/
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tp0020001','C语言程序设计','tp002','谭浩强','清华大学出版社','20240101',51,10,0.8);
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tp0020002','Python程序设计','tp002','李东','清华大学出版社','20240401',59,3,0.8);
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tp0020003','JAVA程序设计','tp002','黑马','人民邮电出版社','20240501',49.9,10,0.85);
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tp0020004','JAVA项目开发实战','tp002','赵莉','人民邮电出版社','20230601',38,5,0.7);
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tp0020005','Python自动化实例教程','tp002','张霞','机械工业出版社','20211020',57,100,0.9);
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tp0020006','C语言项目开发','tp002','李大力','机械出版社','20240101',48,10,0.6);
INSERT INTO books SET bookcode='tp0010001',bookname='计算机导论',categorycode='tp001',
autor='张力',publisher='人民邮电出版社',publishdate='20230203',price=56,number=2,discount=0.7;
INSERT INTO books SET bookcode='tp0010002',bookname='操作系统概论',categorycode='tp001',
autor='刘小平',publisher='高等教育出版社',publishdate='20210203',price=56,number=20,discount=0.7;
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tb0010001','理想国','tb001','柏拉图','教育出版社','20210101',48,10,0.9);
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tb0010002','苏菲的世界','tb001','贾德','人民出版社','20210910',51,5,0.9);
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tg0010001','三字经','tg001',NULL,'江苏出版社','20210101',28,10,0.6);
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tg0010002','弟子规','tg001',NULL,'浙江教育出版社','20210910',18,50,0.9);
INSERT INTO books (bookcode,bookname,categorycode,autor,publisher,publishdate,price,number,discount)
VALUES('tg0010003','国学启蒙','tg001','张新','浙江教育出版社','20200910',18,50,0.9);


/*用户表*/
DELETE FROM users;
INSERT INTO users VALUES('001','王铭','123456','18545621234',NULL,NULL);
INSERT INTO users VALUE('002','王达明','123456','18845621234','男','20240101');
INSERT INTO users VALUE('003','李萍','666666','15165621234','女','20230101');
INSERT INTO users VALUE('004','赵一一','666666','15265621234','男','20220101');                       
INSERT INTO users VALUE('005','张张总','1213','15365621234','男','20230101');
INSERT INTO users VALUE('006','爱笑的鱼儿','456','15465621234','女','20221101'); 
INSERT INTO users VALUE('007','女字姗','456','15565621234','女','20241101');  
INSERT INTO users VALUE('008','跳舞泡泡','456','156465621234','女','20231101');      
/*订单表*/  

DELETE FROM orders;

INSERT INTO orders VALUES('240301001','001','已收货','2024-03-01 09:23');
INSERT INTO orders VALUES('240310001','002','已收货','2024-03-10 12:23');
INSERT INTO orders VALUES('240323001','003','已收货','2024-03-23 15:23');
INSERT INTO orders VALUES('240329001','004','已收货','2024-03-29 18:23');
INSERT INTO orders VALUES('240329002','001','已收货','2024-03-29 21:23');
INSERT INTO orders VALUES('240410001','002','待付款','2024-04-10 11:23');
INSERT INTO orders VALUES('240410002','007','已发货','2024-04-10 12:23');
INSERT INTO orders VALUES('240410003','007','待发货','2024-04-10 15:23');
INSERT INTO orders VALUES('240411001','004','已发货','2024-04-11 18:23');
INSERT INTO orders VALUES('240411002','006','待发货','2024-04-11 21:23');

/*订单明细表*/    
DELETE FROM details;         
INSERT INTO details VALUES('240301001','tp0020001',2);    
INSERT INTO details VALUES('240301001','tb0010001',1);   
 
INSERT INTO details VALUES('240310001','tp0020001',1);    
INSERT INTO details VALUES('240301001','tb0010002',1); 
INSERT INTO details VALUES('240301001','tg0010003',1);   

INSERT INTO details VALUES('240323001','tg0010001',1);   

INSERT INTO details VALUES('240329001','tg0010003',1);
INSERT INTO details VALUES('240329001','tb0010001',2);
  
INSERT INTO details VALUES('240329002','tp0010001',1);  

INSERT INTO details VALUES('240410001','tp0010002',1);
  
INSERT INTO details VALUES('240410002','tb0010001',1);
INSERT INTO details VALUES('240410002','tb0010002',1);
  
INSERT INTO details VALUES('240410003','tp0020004',3); 

   
INSERT INTO details VALUES('240411001','tg0010002',1);

INSERT INTO details VALUES('240411002','tb0010002',2);

 