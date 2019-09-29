create database viplib;
use viplib;

create table libros(nombre varchar(100) not null, cantidad int(5) not null, precio int (10) not null);
create table ropa(nombre varchar (100) not null, cantidad int(5) not null, precio int(10) not null);
create table tecnologia(nombre varchar(100) not null, cantidad int(5) not null, precio int(10) not null);

insert into libros values ('El nombre de la Rosa','2','14.99');
insert into libros values ('Bodas de sangre','5','9.99'),('Guerra y Paz','6','16.99'),('Orgullo y prejuicio','2','19.99'),('Como agua para chocolate','5','9.99'),('El lobo estepario','5','24.99'),('El arte de amar','2','12.99'),('En busco del tiempo perdido','1','21.99'),('Ulises','10','24.99');

insert into ropa values ('Traje de baño','15','24.99'),('Crop Top','5','14.99'),('Pantalon Hombre','12','16.99'),('Short para dama','5','9.99'),('Blusa','15','11.99'),('Esmoquin','20','64.99'),('Esmoquin crema','20','84.99'),('Vestido Casual','15','89.99'),('Vestido','12','119.99');

insert into tecnologia values ('Pc Gamer','1','1999.99'),('Xiaomi mi band','20','39.99'),('i7 TWS','25','11.99'),('Laptop HP','2','299.99'),('Samsung curved','1','799.99'),('Samsung s10','5','899.99'),('Mause gamer','25','6.99'),('Teclado gamer','25','21.99'),('PS4','10','599.99');