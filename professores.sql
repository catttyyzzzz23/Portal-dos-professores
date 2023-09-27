drop database if exists professores;
create database professores;
use professores;
create table alunos(
	nsa int auto_increment primary key,
    nome VARCHAR (20),
    apelido VARCHAR (20),
    turmas VARCHAR (20),
    numero INT,
    escola VARCHAR (100),
    periodo VARCHAR (30),
    nota INT
    
    );