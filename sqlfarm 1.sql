create database Farmacia;

use Farmacia;

create table info(
RG bigint primary key,
nome varchar(100),
Telefone varchar(15),
listplano varchar(50),
listfarm varchar(50),
farmacia varchar(10)
);

select * from info;