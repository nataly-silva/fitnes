<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM alunos WHERE id = :id";
$stmt = $con->prepare($sql);
$stmt->execute([':id' => $id]);

header("Location: index.php");