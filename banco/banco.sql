CREATE DATABASE IF NOT EXISTS aluno;

USE aluno;

CREATE TABLE IF NOT EXISTS produtos(

	cpfAluno char(14) not null primary key comment 'Chave Primária',
	nomeAluno varchar(80) not null comment 'Nome',
	datanascimentoAluno char(10) not null comment 'Data de Nascimento',
	enderecoAluno varchar(120) not null comment 'Endereço',
	idadeAluno int not null comment 'Idade',
	dataingressoAluno char(10) not null comment 'Data de Ingresso',
	salarioAluno float not null comment 'Salário',
	areasInteresse varchar(120) comment 'Áreas de Interesse'

);