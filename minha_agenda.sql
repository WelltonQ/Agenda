CREATE DATABASE minha_agenda;

CREATE TABLE usuarios(
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    email_usuario varchar(100) not null,
    senha_usuario varchar(20) not null
);

CREATE TABLE agendas(
    id_agenda INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id int(11),
    empresa_agenda VARCHAR(255),
    CNPJCPF_agenda VARCHAR(50),
    contato_agenda VARCHAR(255),
    email_agenda VARCHAR(50),
    fone1_agenda VARCHAR(50),
    fone2_agenda VARCHAR(50),
    fone3_agenda VARCHAR(50),
    nbanco_agenda VARCHAR(50),
    nomebanco_agenda VARCHAR(100),
    agencia_agenda VARCHAR(50),
    conta_agenda VARCHAR(50),
    operacao_agenda VARCHAR(50),
    observacao_agenda VARCHAR(255)
);

ALTER TABLE agendas 

ALTER TABLE agendas ADD FOREIGN KEY(usuario_id)
REFERENCES usuarios(id_usuario)