create database viplib;
use viplib;

create table libros(nombre varchar(100) not null, cantidad int(5) not null, precio int (10) not null);
create table ropa(nombre varchar (100) not null, cantidad int(5) not null, precio int(10) not null);
create table tecnologia(nombre varchar(100) not null, cantidad int(5) not null, precio int(10) not null);

insert into libros values ('El nombre de la Rosa','2','14.99');
insert into libros values ('Bodas de sangre','5','9.99'),('Guerra y Paz','6','16.99');
