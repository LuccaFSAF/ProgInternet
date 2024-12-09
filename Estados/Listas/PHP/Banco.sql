create database if not exists crud;
use crud;
create table if not exists usuario(
 id int not null auto_increment primary key,
 nome varchar(40) not null,
 email varchar(40) not null
);
select * from crud.usuario;