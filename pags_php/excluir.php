<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

	<body>
		
		<?php 

			require_once('conexao_bd.php');

			$cpf = $_GET['cpf'];

			$sql = "DELETE FROM produtos WHERE cpfAluno = '$cpf'";

			$deleta = mysqli_query($conexao, $sql);

			if($deleta):

				echo "<script>
					alert('Aluno deletado com Sucesso!');
					window.location = '../index.php';
				</script>";

			else:

				echo "<script>
					alert('Falha ao deletar Aluno!');
					window.location = '../index.php';
				</script>";

			endif;

		?>

	</body>

</html>

