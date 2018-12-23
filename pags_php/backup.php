<?php
	
	require_once('conexao_bd.php');

	$sql = "SELECT * FROM produtos";

	$consulta = mysqli_query($conexao, $sql);

	$arquivo = fopen("../backup/backup.txt", "w");

	while($linha = mysqli_fetch_assoc($consulta)):

		$dados = "\r\n";
		$dados .= "CpfAluno: " . $linha['cpfAluno'] . "\r\n";
		$dados .= "NomeAluno: " . $linha['nomeAluno'] . "\r\n";
		$dados .= "DataNascimentoAluno: " . $linha['datanascimentoAluno'] . "\r\n";
		$dados .= "EnderecoAluno: " . $linha['enderecoAluno'] . "\r\n";
		$dados .= "IdadeAluno: " . $linha['idadeAluno'] . "\r\n";
		$dados .= "DataIngressoAluno: " . $linha['dataingressoAluno'] . "\r\n";
		$dados .= "SalarioAluno: " . $linha['salarioAluno'] . "R$" . "\r\n";
		$dados .= "AreasInteresse: " . $linha['areasInteresse'] . "\r\n";

		$escreve = fwrite($arquivo, $dados);

	endwhile;

	if($escreve):

		echo "<script>
			alert('Backup feito com sucesso!');
			window.location = '../index.php';
		</script>";

	else:

		echo "<script>
			alert('Falha ao fazer o Backup!');
			window.location = '../index.php';
		</script>";

	endif;

?>