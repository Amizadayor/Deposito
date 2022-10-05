drop database if exists modelorama;
create database modelorama;
use modelorama;

create table Proveedor(
    Id int not null primary key auto_increment,
    Nombre_1 varchar(255) not null,
    Nombre_2 varchar(255),
    Apellido_paterno varchar(255) not null,
    Apellido_materno varchar(255) not null,
    Numero_telefono varchar(10) not null,
    Empresa varchar(255) not null

);

create table Categoria(
    Id int not null primary key auto_increment,
    Nombre_categoria varchar(255) not null,
    Capacidad_producto varchar(255) not null
);

create table Producto(
    Id int not null primary key auto_increment,
    Nombre_producto varchar(255) not null,
    Precio_producto varchar(255) not null,
    Stock int not null,
    Categoria_id int not null,
    Proveedor_id int not null,
    foreign key (Categoria_id) references Categoria (Id),
    foreign key (Proveedor_id) references Proveedor (Id)
);

create table Cliente(
    Id int not null primary key auto_increment,
    Nombre_1 varchar(255) not null,
    Nombre_2 varchar(255),
    Apellido_paterno varchar(255) not null,
    Apellido_materno varchar(255) not null,
    Numero_telefono int (10) not null,
    Direccion varchar(255) not null,
    Fecha_nacimiento varchar(10) not null

);

create table Empleado(
    Id int not null primary key auto_increment,
    Usuario varchar(20) not null,
    Password_empleado varchar(20) not null,
    Nombre_1 varchar(255) not null,
    Nombre_2 varchar(255) not null,
    Apellido_paterno varchar(255) not null,
    Apellido_materno varchar(255) not null,
    Numero_telefono varchar(10) not null,
    Direccion varchar(255) not null,
    Curp varchar(18) not null,
    RFC varchar(13) not null

);

create table Venta(
    Id int not null primary key auto_increment,
    Total int not null,
    Cantidad_producto_vendido int not null,
    Cliente_id int not null,
    Empleado_id int not null,
    Fecha_venta varchar(50) not null,
    foreign key (Cliente_id) references Cliente (Id),
    foreign key (Empleado_id) references Empleado (Id)
);

create table Producto_Venta(
    Id int not null primary key auto_increment,
    Total int not null,
    Cantidad_producto int not null,
    Producto_id int not null,
    foreign key (Producto_id) references Producto (Id),
    Venta_id int not null,
    foreign key (Venta_id) references Venta (Id)
);