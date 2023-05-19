<?php
include_once 'conexao.php';

$stmt = $con->query("SELECT * FROM alunos
                       ORDER BY nome");
print '<ul>';
while ($rw = $stmt->fetch(\PDO::FETCH_ASSOC)) {
    print "<li>{$rw['nome']} {$rw['data_cadastro']} {$rw['turno']} {$rw['horario']} {$rw['data_nascimento']} {$rw['data_cadastro']} {$rw['rg']} {$rw['cpf']}  {$rw['telefone']} {$rw['celular']} {$rw['objetivo']} {$rw['endereco']} {$rw['bairro']} {$rw['cidade']} {$rw['situacao']}<a href='deletar.php?id={$rw['id']}'>Deletar</a> <a href='index.php?id={$rw['id']}'>Atualizar</a> </li>";
}
print '</ul>';
