<?php
	
	$servidor = "127.0.0.1";
	$usuario = "root";
	$senha = "";
	$banco = "aluno";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

	mysqli_set_charset($conexao, 'utf8');

?>