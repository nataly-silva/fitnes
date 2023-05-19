<?php
$con = new \PDO("sqlite:academia.sqlite");

$sql = " CREATE TABLE IF NOT EXISTS alunos(
    id INTEGER,
    nome varchar(255) NOT NULL,
    data_cadastro date NOT NULL,
    turno varchar(40) NOT NULL,
    horario date NOT NULL,
    data_nascimento date NOT NULL,
    rg int(8) NOT NULL,
    cpf  int(11) NOT NULL,
    telefone int (11) NOT NULL,
    celular int(11) NOT NULL,
    objetivo text(255) NOT NULL,
    endereco text(255) NOT NULL,
    bairro text(255) NOT NULL,
    cidade text(255) NOT NULL,
    situacao text(255) NOT NULL,
    PRIMARY KEY(id AUTOINCREMENT)
);";
$con->exec($sql);
?>
