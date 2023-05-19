<?php
include "conexao.php";

$nome  = $_POST['nome'];
$data_cadastro = $_POST['data_cadastro'];
$turno = $_POST['turno'];
$horario = $_POST['horario'];
$data_nascimento = $_POST['data_nascimento'];
$rg = $_POST['turno'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$objetivo = $_POST['objetivo'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$situacao = $_POST['situacao'];

$sql = 'INSERT INTO alunos(nome, data_cadastro, turno, horario, data_nascimento,rg, cpf, telefone, celular, objetivo, endereco, bairro, cidade, situacao) VALUES(:nome, :data_cadastro, :turno, :horario, :data_nascimento, :rg, :cpf, :telefone, :celular, :objetivo, :endereco, :bairro, :cidade, :situacao)';

$stmt = $con->prepare($sql);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':data_cadastro', $data_cadastro);
$stmt->bindValue(':turno', $turno);
$stmt->bindValue(':horario', $horario);
$stmt->bindValue(':data_nascimento', $data_nascimento);
$stmt->bindValue(':rg', $rg);
$stmt->bindValue(':cpf', $cpf);
$stmt->bindValue(':telefone', $telefone);
$stmt->bindValue(':celular', $celular);
$stmt->bindValue(':objetivo', $objetivo);
$stmt->bindValue(':endereco', $endereco);
$stmt->bindValue(':bairro', $bairro);
$stmt->bindValue(':cidade', $cidade);
$stmt->bindValue(':situacao', $situacao);
$successo = $stmt->execute();
$con->lastInsertId();

header("Location:index.php?sucesso=$successo");
