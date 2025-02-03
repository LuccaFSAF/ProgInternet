create database if not exists crud;
use crud;
create table if not exists usuario(
 id int not null auto_increment primary key,
 nome varchar(40) not null,
 email varchar(40) not null,
 telefone varchar(15) not null,
 datnasc varchar(15) not null
);
select * from crud.usuario;