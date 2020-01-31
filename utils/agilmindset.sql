/* Criando um banco de dados chamado agilmindset */
create database agilmindset;

/* Usando o banco de dados agilmindset */
use agilmindset;

/* Criando tabela de usuários */
create table usuarios (
	id int(110) unique not null primary key auto_increment,
    nome varchar(110) not null,
    sobrenome varchar(110) not null,
    apelido varchar(110) not null,
    email varchar(110) not null unique,
    senha varchar(110) not null
);

/* Visualizando estrutura da tabela usuarios */
describe usuarios;

/* Inserindo usuário inicial (sample) */
/* INSERT INTO usuarios (nome, sobrenome, apelido, email, senha) values ("Fulano", "da Silva", "Fulanito", "fulano@dasilva.com", "123456789");

/* Visualizando usuários cadastrados na tabela usuarios */
select * from usuarios;

/* Resetando tabela usuarios */
/* truncate usuarios; */

/* Apagando tabela usuarios */
/* drop table usuarios; */