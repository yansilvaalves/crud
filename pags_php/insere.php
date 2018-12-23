<?php

	require_once("conexao_bd.php");

	if(!empty($_POST['cpf']) || !empty($_POST['nome']) || !empty($_POST['datan']) || !empty($_POST['end']) || !empty($_POST['ida']) || !empty($_POST['datai']) || !empty($_POST['sala'])):

		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];
		$datan = $_POST['datan'];
		$end = $_POST['end'];
		$idade = $_POST['ida'];
		$datai = $_POST['datai'];
		$salario = $_POST['sala'];
		$botoes = $_POST['botoes'];

		$interesses = " | ";

		if(!empty($botoes)):

			foreach($botoes as $valor):

				$interesses .= $valor . " | "; 

			endforeach;

		else:

			$interesses = "nenhum";

		endif;

		$sql = "INSERT INTO produtos(cpfAluno, nomeAluno, datanascimentoAluno, enderecoAluno, idadeAluno, dataingressoAluno, salarioAluno, areasInteresse) VALUES ('$cpf', '$nome', '$datan', '$end', '$idade', '$datai', '$salario', '$interesses')";

		$insere = mysqli_query($conexao, $sql);

		if($insere):

			echo "<script>

				alert('Aluno cadastrado com sucesso');
				window.location = '../index.php';

			</script>";

		else:

			echo "<script>

				alert('Falha ao cadastrar o aluno');
				window.location = '../index.php';

			</script>";

		endif;

	else:

		echo "<script>

				alert('Todos os campos devem ser preenchidos');
				window.location = '../index.php';

			</script>";

	endif;

?>