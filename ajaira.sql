create table ajaira(
id int primary key auto increment,
name varchar(10) not null,
email varchar(100) not null unique,
price int
);