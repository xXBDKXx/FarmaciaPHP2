create database Farmacia;

use Farmacia;

create table info(
nome varchar(100),
RG bigint primary key,
Telefone varchar(15),
listplano varchar(50),
listfarm varchar(50)
);

create table FarmA(
codigoFarmA int primary key,
CNPJ varchar(15),
endereco varchar(100),
distribuidora varchar(100),
info_RG bigint,
FOREIGN KEY (info_RG) REFERENCES info(RG)
);


create table FarmB(
codigoFarmB int primary key,
CNPJ varchar(15),
endereco varchar(100),
distribuidora varchar(100),
info_RG bigint,
FOREIGN KEY (info_RG) REFERENCES info(RG)
);

create table FarmC(
codigoFarmC int primary key,
CNPJ varchar(15),
endereco varchar(100),
distribuidora varchar(100),
info_RG bigint,
FOREIGN KEY (info_RG) REFERENCES info(RG)
);

create table FarmD(
codigoFarmD int primary key,
CNPJ varchar(15),
endereco varchar(100),
distribuidora varchar(100),
info_RG bigint,
FOREIGN KEY (info_RG) REFERENCES info(RG)
);

select * from farmA;