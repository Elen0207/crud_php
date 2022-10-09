CREATE DATABASE EletronicosDB;
USE EletronicosDB;

CREATE TABLE TableUsuario (
	idUsuario INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nomeUsuario VARCHAR(30) NOT NULL,
	CEP INTEGER(8) NOT NULL,
	ruaEnderecoNumero VARCHAR(50),
	cidadeEndereco VARCHAR(25),
	estadoEndereco CHAR(2),
	telefoneUsuario CHAR(11),
	tipoUsuario CHAR(2),
	login VARCHAR(50),
	senha VARCHAR(20)
);

USE EletronicosDB;

delimiter //
create procedure PC_Insert_Usuario(IN InsNomeUsuario VARCHAR(30), InsCEP INTEGER(8), InsRuaEnderecoNumero VARCHAR(50), InsCidadeEndereco VARCHAR(25),
InsEstadoEndereco CHAR(2), InsTelefoneUsuario CHAR(20), InsTipoUsuario CHAR(2), InsLogin VARCHAR(50), InsSenha VARCHAR(20))
Begin
insert into TableUsuario(nomeUsuario, CEP, ruaEnderecoNumero, cidadeEndereco, estadoEndereco, telefoneUsuario, tipoUsuario, login, senha) Values
( InsNomeUsuario, InsCEP, InsRuaEnderecoNumero, InsCidadeEndereco, InsEstadoEndereco, InsTelefoneUsuario, InsTipoUsuario, InsLogin, InsSenha);
        
end //


delimiter ;

/*call PC_Insert_Usuario( 'Gustavo', 12345678, 'Rua aguia de haia 123', 'São Paulo',  'SP', '22563658', 'C', 'Guga123', 'Guga123');
select * from TableUsuario;  */

/*call PC_Insert_Usuario( 'Gustavo', 12345678, 'Rua aguia de haia 123', 'São Paulo',  'SP', '22563658', 'C', 'Guga123', 'Guga123');
select * from TableUsuario;  */
