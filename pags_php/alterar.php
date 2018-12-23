<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<title>Alterar</title>

		<link rel="stylesheet" type="text/css" href="../estilo/materialize.css">
		<link rel="stylesheet" type="text/css" href="../estilo/customizado.css">
		<link rel="icon" type="image/png" href="../img/icon.png">

	</head>

	<body>

		<div class="row container">

			<div class="card-panel orange">

				<h1 class="flow-text center white-text">ALTERAR ALUNO</h1>

			</div>

		</div>

		<form class="row container white" method="post" action="atualiza.php">


			<?php

				require_once('conexao_bd.php');

				$cpf = $_GET['cpf'];

				$sql = "SELECT * FROM produtos WHERE cpfAluno = '$cpf'";

				$consulta = mysqli_query($conexao, $sql);

				while($linha = mysqli_fetch_assoc($consulta)):

			?>

				<div class="input-field col s4">

					<input type="text" id="cpf" name="cpf" readonly="true" value="<?php echo $linha['cpfAluno'] ?>">

					<label for="cpf">CPF</label>

				</div>


				<div class="input-field col s4">

					<input type="text" id="nome" name="nome" value="<?php echo $linha['nomeAluno'] ?>">

					<label for="nome">Nome</label>

				</div>


				<div class="input-field col s4">

					<input type="text" id="datan" name="datan" value="<?php echo $linha['datanascimentoAluno'] ?>">

					<label for="datan">Data de Nascimento</label>

				</div>


				<div class="input-field col s6">

					<input type="text" id="end" name="end" value="<?php echo $linha['enderecoAluno'] ?>">

					<label for="end">Endereço</label>

				</div>


				<div class="input-field col s6">

					<input type="text" id="ida" name="ida" value="<?php echo $linha['idadeAluno'] ?>">

					<label for="ida">Idade</label>

				</div>


				<div class="input-field col s6">

					<input type="text" id="datai" name="datai" value="<?php echo $linha['dataingressoAluno'] ?>">

					<label for="datai">Data de Ingresso</label>

				</div>


				<div class="input-field col s6">

					<input type="text" id="sala" name="sala" value="<?php echo $linha['salarioAluno'] ?>">

					<label for="sala">Salário</label>

				</div>

				<div class="input-field col s6">

				 	<p>
				 		<label>
				 			<input type="checkbox" name="botoes[]" value="futebol">
				 			<span>Futebol</span>
				 		</label>
				 	</p>

				 	<p>
				 		<label>
				 			<input type="checkbox" name="botoes[]" value="lol">
				 			<span>LOL</span>
				 		</label>
				 	</p>

				 	<p>
				 		<label>
				 			<input type="checkbox" name="botoes[]" value="crossfire">
				 			<span>Crossfire</span>
				 		</label>
				 	</p>

				 	<p>
				 		<label>
				 			<input type="checkbox" name="botoes[]" value="freefire">
				 			<span>Freefire</span>
				 		</label>
				 	</p>

				 	<p>
				 		<label>
				 			<input type="checkbox" name="botoes[]" value="cs">
				 			<span>CS</span>
				 		</label>
				 	</p>

				</div>

				<div class="input-field col s6">

					<p>
				 		<label>
				 			<input type="checkbox" name="botoes[]" value="KH">
				 			<span>Kingdom Hearts</span>
				 		</label>
				 	</p>

				 	<p>
				 		<label>
				 			<input type="checkbox" name="botoes[]" value="undertale">
				 			<span>Undertale</span>
				 		</label>
				 	</p>

				 	<p>
				 		<label>
				 			<input type="checkbox" name="botoes[]" value="minecarft">
				 			<span>Minecraft</span>
				 		</label>
				 	</p>

				 	<p>
				 		<label>
				 			<input type="checkbox" name="botoes[]" value="gartic">
				 			<span>Gartic</span>
				 		</label>
				 	</p>

				 	<p>
				 		<label>
				 			<input type="checkbox" name="botoes[]" value="agario">
				 			<span>Agar.io</span>
				 		</label>
				 	</p>

				</div>

			<?php endwhile; ?>

			<center><div class="input-field col s12">

					<button class="btn-large waves-effect waves-light purple" type="submit" name="atualizar">Atualizar
  					 </button>

				</div></center>
		</form>

		<footer class="page-footer blue darken-4">
			
			<div class="container white-text">
				<div class="row">

					<div class="col l6 s12">

						<h5 class="white-text">Conteúdo</h5>

						<p class="white-text">Sistema de alunos</p>

					</div>

					<div class="col l4 offset-l2 s12">

						<h5 class="white-text">Links</h5>

						<ul>
							<li><a class="white-text">Cadastro</a></li>
							<li><a class="white-text">Consulta</a></li>
							<li><a class="white-text">Alteração</a></li>
							<li><a class="white-text">Exclusão</a></li>
						</ul>
						
					</div>

				</div>

				<div class="row">
					<div class="col s12 m4 l4">
						<img src="../img/corre.gif" height="60">
					</div>
				</div>
			</div>

			<div class="footer-copyright">

				<div class="container">
					2018 @ Yan Alves - Estudante de Informática
				</div>

			</div>

		</footer>


		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/materialize.js"></script>
		<script type="text/javascript" src="../js/jquerymaskedinput.js"></script>
		<script type="text/javascript" src="../js/script-mascara.js"></script>

	</body>

</html>