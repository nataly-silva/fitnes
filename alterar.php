<?php
include "conexao.php";


$sql = "UPDATE alunos SET nome = :nome, data_cadastro = :data_cadastro, turno = :turno, horario = :horario, data_nascimento = :data_nascimento, rg = :rg, cpf = :cpf, telefone = :telefone, celular = :celular, objetivo = :objetivo, endereco  = :endereco, bairro = :bairro, cidade = :cidade, situacao = :situacao WHERE id = :id";
$stmt = $con->prepare($sql);
$stmt->execute([':id' => $_POST['id'], 
				":nome"=>$_POST['nome'], 
				":data_cadastro"=>$_POST['data_cadastro'],
				":turno"=>$_POST['turno'],
				":horario"=>$_POST['horario'],
				":data_nascimento"=>$_POST['data_nascimento'],
				":rg"=>$_POST['rg'],
				":cpf"=>$_POST['cpf'],
				":telefone"=>$_POST['telefone'],
				":celular"=>$_POST['celular'],
				":objetivo"=>$_POST['objetivo'],
				":endereco"=>$_POST['endereco'],
				":bairro"=>$_POST['bairro'],
				":cidade"=>$_POST['cidade'],
				":situacao"=>$_POST['situacao'],
			]);
header('Location: index.php?sucesso=1');
die();