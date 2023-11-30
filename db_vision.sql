CREATE DATABASE IF NOT EXISTS db_vision;

-- Selecionar a base de dados
USE db_vision;

CREATE TABLE usuarios (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  nombre_usuario varchar(45) NOT NULL,
  clave varchar(255) NOT NULL,
  nombre varchar(200) NOT NULL,
  apellido varchar(200) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY usuario (nombre_usuario)
) ENGINE=InnoDB AUTO_INCREMENT=1;

-- Insertamos un usuario: nombre de usuario: ejemplo - Clave: 1234 (encriptada)
INSERT INTO usuarios (nombre_usuario, clave, nombre, apellido)
VALUES ('ArthurG','art123','Arthur','Goncalves');

-- Criar a tabela "clientes"
CREATE TABLE clientes (
  id_cliente int(10) unsigned NOT NULL AUTO_INCREMENT,
  nombre_cliente varchar(200) NOT NULL,
  direccion varchar(255),
  telefono varchar(20),
  PRIMARY KEY (id_cliente)
) ENGINE=InnoDB AUTO_INCREMENT=1;

-- Criar a tabela "servicos" com chave estrangeira para "clientes"
CREATE TABLE servicos (
  id_servico int(10) unsigned NOT NULL AUTO_INCREMENT,
  nome_servico varchar(200) NOT NULL,
  descricao text,
  preco decimal(10, 2) NOT NULL,
  id_cliente int(10) unsigned NOT NULL,
  PRIMARY KEY (id_servico),
  FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
) ENGINE=InnoDB AUTO_INCREMENT=1;