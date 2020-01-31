/* Criando um banco de dados chamado agilmindset */
create database agilmindset;

/* Usando o banco de dados agilmindset */
use agilmindset;

/* Criando tabela de usuários */
create table usuarios (
	id int(110) not null primary key auto_increment,
    nome varchar(110) not null,
    sobrenome varchar(110) not null,
    apelido varchar(110) not null,
    email varchar(110) not null unique,
    senha varchar(110) not null,
    aceite boolean not null,
    nivel int(2) not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp
);

/* Visualizando estrutura da tabela usuarios */
/* describe usuarios; */

/* Inserindo usuário inicial (sample) */
/* INSERT INTO usuarios (nome, sobrenome, apelido, email, senha, aceite) values ("Fulano", "da Silva", "Fulanito", "fulano@dasilva.com", "123456789", true); */

/* Visualizando usuários cadastrados na tabela usuarios */
select * from usuarios;

/* Resetando tabela usuarios */
/* truncate usuarios; */

/* Apagando tabela usuarios */
/* drop table usuarios; */