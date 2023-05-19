<?php

if (isset($_GET['sucesso'])){
	if ($_GET['sucesso'] == 1){
		print "<h3>Deu certo!!</h3>";
	} else {
		print "<h3>Eita!!</h3>";
	}
}

if(isset($_GET["id"]) ){
	include 'conexao.php';
	$stmt = $con->query("SELECT * FROM alunos WHERE id=".$_GET['id']." ORDER BY nome");
	$rw = $stmt->fetch();
	// print_r($rw);
}

?>

<form action="<?php if(isset($_GET["id"])){ print 'alterar';} else{print 'salvar';} ?>.php" method="POST">
    <?php 
		if(isset($_GET["id"]))
			print "<input type='text' name='id' value='".$_GET['id']."' hidden>"
	?>
	Nome
	<input name="nome" 
	value="<?php if(isset($rw) && $rw) print $rw['nome']?>"> <br/>
	
	Data de Cadastro
	<input type="datetime-local" name="data_cadastro" 
	value="<?php if(isset($rw) && $rw) print $rw['data_cadastro']?>"><br/>
	
	Turno
	<br>
	<input type="radio" id="m" name="turno" value="matutino" 
	<?php if(isset($rw) && $rw['turno']=='matutino') print 'checked'?> >
  	<label for="m">Matutino</label><br>
	<input type="radio" id="v" name="turno" value="vespertino" 
	<?php if(isset($rw) && $rw['turno']=='vespertino') print 'checked'?> >
  	<label for="v">Vespertino</label><br>
	<input type="radio" id="n" name="turno" value="noturno"
	<?php if(isset($rw) && $rw['turno']=='noturno') print 'checked'?> >
  	<label for="n">Noturno</label><br>

	Horário
	<input type="datetime-local" name="horario" 
	value="<?php if(isset($rw) && $rw) print $rw['data_cadastro']?>"><br/>

	Data de Nascimento
	<input type="date" name="data_nascimento" 
	value="<?php if(isset($rw) && $rw) print $rw['data_nascimento']?>"><br/>

	RG
	<input type="text" name="rg" placeholder="x.xxx.xxx" 
	value="<?php if(isset($rw) && $rw) print $rw['rg']?>"><br/>

	CPF
	<input type="text" name="cpf" placeholder="xxx.xxx.xxx-xx" 
	value="<?php if(isset($rw) && $rw) print $rw['cpf']?>"><br/>

	Telefone
	<input type="text" name="telefone" placeholder="(xx) x xxxx-xxxx" 
	value="<?php if(isset($rw) && $rw) print $rw['telefone']?>"><br/>

	Celular
	<input type="text" name="celular" placeholder="(xx) x xxxx-xxxx" 
	value="<?php if(isset($rw) && $rw) print $rw['celular']?>"><br/>

	Objetivo
	<br>
	<input type="radio" id="s" name="objetivo" value="Saúde" 
	<?php if(isset($rw) && $rw['objetivo']=='Saúde')	print 'checked'?> >

  	<label for="s">Saúde</label><br>

	<input type="radio" id="e" name="objetivo" value="Estética"
	<?php if(isset($rw) && $rw['objetivo']=='Estética')	print 'checked'?> >

  	<label for="e">Estética</label><br>

	<input type="radio" id="maromba" name="objetivo" value="Maromba"
	<?php if(isset($rw) && $rw['objetivo']=='Maromba')	print 'checked'?> >

  	<label for="maromba">Maromba</label><br>

	  Endereço
	<input type="text" name="endereco"
	value="<?php if(isset($rw) && $rw) print $rw['endereco']?>"><br/>

	Bairro
	<input type="text" name="bairro"
	value="<?php if(isset($rw) && $rw) print $rw['bairro']?>"><br/>

	Cidade
	<input type="text" name="cidade"
	value="<?php if(isset($rw) && $rw) print $rw['cidade']?>"><br/>

	Situação
	<br>
	<input type="radio" id="matri" name="situacao" value="matriculado"
	<?php if(isset($rw) && $rw['situacao']=='matriculado')	print 'checked'?> >
  	<label for="matri">Matriculado</label><br>
	<input type="radio" id="desis" name="situacao" value="desistente"
	<?php if(isset($rw) && $rw['situacao']=='desistente')	print 'checked'?> >
  	<label for="desis">Desistente</label><br>
	


    <button>Enviar</button>

</form>

<?php include 'listar.php' ?>