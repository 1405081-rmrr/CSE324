CREATE TABLE areas(
id int primary key auto_increment,
name varchar(30) not null
);

CREATE TABLE persons(
id int primary key auto_increment,
name varchar(20) not null,
email varchar(20) not null unique,
password varchar(100),
mobile_number decimal(11,0)
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
name varchar(50) not null,
price int not null,
res_id int,
cat_id int,
primary key(id,price),
foreign key(cat_id)
references catagories(id),
foreign key (res_id)
references restaurants(id)
);

Create Table area_manager(
person_name varchar(30) not null,
email_id varchar(30) not null unique,
password varchar(20),
phone_num int(20),
area_id int primary key
);
CREATE TABLE orders(
order_id int primary key auto_increment,
persons_id int not null,
menu_id int not null,
area_id int,
res_id int,
quantity int,
menu_price int,
foreign key (persons_id) references persons(id),
time_of_order TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
foreign key(menu_id,menu_price) references menu(id,price),
foreign key (area_id) references areas(id),
foreign key (res_id) references restaurants(id),
foreign key (area_id) references area_manager(area_id)
);
