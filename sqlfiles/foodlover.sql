CREATE TABLE areas(
id int primary key auto_increment,
name varchar(30) not null
);

CREATE TABLE persons(
id int primary key auto_increment,
name varchar(20) not null,
email varchar(20) not null unique,
password varchar(10),
mobile_number decimal(11,0),
area_id int ,
foreign key (area_id)
references areas(id)
);

CREATE TABLE restaurants(
id int primary key auto_increment,
name varchar (20) not null,
area_id int,
foreign key (area_id)
references areas(id)
);


CREATE TABLE catagories(
id int primary key auto_increment,
name varchar(20) not null unique
);


CREATE TABLE menu(
id int   auto_increment,
name varchar(20) not null,
price int not null,
res_id int,
cat_id int,
primary key(id,price),
foreign key(cat_id)
references catagories(id),
foreign key (res_id)
references restaurants(id)
);

CREATE TABLE orders(
order_id int primary key auto_increment,
menu_id int not null,
area_id int,
res_id int,
quantity int,
menu_price int,
foreign key(menu_id,menu_price) references menu(id,price),
foreign key (area_id) references areas(id),
foreign key (res_id) references restaurants(id)
);


