create database cafeteria;
use cafeteria;

create table inventario(
id varchar(50),
nombre varchar(50),
referencia varchar(50),
precio varchar(50),
peso varchar(50),
categoria varchar(50),
stock int,
fecha datetime,
primary key(id)
);

select*from inventario;

SELECT MAX(stock), nombre FROM inventario;