<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<title>Formulário</title>
		<link rel="stylesheet" type="text/css" href="estilo/materialize.css">
		<link rel="stylesheet" type="text/css" href="estilo/customizado.css">
		<link rel="icon" type="image/png" href="img/icon.png">

	</head>
	<body>

		<div class="row container">

			<div class="card-panel orange">

				<h1 class="flow-text center white-text">CADASTRO DE ALUNOS</h1>

			</div>

		</div>

		<div class="row container white">

			<form class="col s12" method="post" action="pags_php/insere.php">

				<div class="input-field col s4">

					<input type="text" id="cpf" name="cpf">

					<label for="cpf">CPF</label>

				</div>


				<div class="input-field col s4">

					<input type="text" id="nome" name="nome">

					<label for="nome">Nome</label>

				</div>


				<div class="input-field col s4">

					<input type="text" id="datan" name="datan">

					<label for="datan">Data de Nascimento</label>

				</div>


				<div class="input-field col s6">

					<input type="text" id="end" name="end">

					<label for="end">Endereço</label>

				</div>


				<div class="input-field col s6">

					<input type="text" id="ida" name="ida">

					<label for="ida">Idade</label>

				</div>


				<div class="input-field col s6">

					<input type="text" id="datai" name="datai">

					<label for="datai">Data de Ingresso</label>

				</div>


				<div class="input-field col s6">

					<input type="text" id="sala" name="sala">

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

				<center><div class="input-field col s12 m6">

					 <button class="btn-large waves-effect waves-light purple" type="submit" name="enviar">Cadastrar
  					 </button>

				</div>

				<div class="input-field col s12 m6">

					<button class="btn-large waves-effect waves-light purple" type="reset" name="apagar">Redefinir
  					 </button>

				</div></center>

			</form>
		</div>

		<div class="row container">

			<div class="card-panel orange">

				<h1 class="flow-text center white-text">TABELA DE ALUNOS</h1>

			</div>

		</div>

		<table class="responsive-table row centered striped white">

			<thead>

				<tr>
					<th>CPFAluno</th>
					<th>Nome</th>
					<th>Data Nascimento</th>
					<th>Endereço</th>
					<th>Idade</th>
					<th>Data Ingresso</th>
					<th>Salário</th>
					<th>Interesses</th>
					<th>Alterar</th>
					<th>Excluir</th>
					<th>Relatório</th>
				</tr>

			</thead>

			<tbody>
				
				<?php

					require_once("pags_php/conexao_bd.php");

					$sql = "SELECT * FROM produtos";

					$resultado = mysqli_query($conexao, $sql);

					if($resultado):

						while($linha = mysqli_fetch_assoc($resultado)):


				?>


				<tr>

					<td>
						<?php

							echo $linha['cpfAluno'];

						?>
					</td>

					<td>
						<?php

							echo $linha['nomeAluno'];

						?>
					</td>

					<td>
						<?php

							echo $linha['datanascimentoAluno'];

						?>
					</td>

					<td>
						<?php

							echo $linha['enderecoAluno'];

						?>
					</td>

					<td>
						<?php

							echo $linha['idadeAluno'];

						?>
					</td>

					<td>
						<?php

							echo $linha['dataingressoAluno'];

						?>
					</td>

					<td>
						<?php

							echo $linha['salarioAluno'] . " R$";

						?>
					</td>

					<td>
						<?php

							echo $linha['areasInteresse'];

						?>
					</td>

					<td>
						<a href="pags_php/alterar.php?cpf=<?php echo $linha['cpfAluno']; ?>" class="btn-small waves-effect waves-light orange">Alterar</a>
					</td>

					<td>
						<a href="pags_php/excluir.php?cpf=<?php echo $linha['cpfAluno']; ?>" class="btn-small waves-effect waves-light red">Excluir</a>
					</td>

					<td>
						<a href="pags_php/relatorio.php?cpf=<?php echo $linha['cpfAluno']; ?>" class="btn-small waves-effect waves-light purple">Relatório</a>
					</td>

					
				</tr>

				<?php

					endwhile;

				endif;

				?>

			</tbody>

		</table>

		<div class="row container">

			<div class="card-panel orange">

				<h1 class="flow-text center white-text">CONSULTAR VALORES</h1>

			</div>

		</div>

		<form class="row container white" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<div class="input-field col s6">

				<p>
					<label>
					 	<input type="radio" name="escolha" value="nomeAluno">
					 	<span>Nome do Aluno</span>
					 </label>
				</p>

				<p>
					<label>
					 	<input type="radio" name="escolha" value="datanascimentoAluno">
					 	<span>Data de Nascimento</span>
					 </label>
				</p>

				<p>
					<label>
					 	<input type="radio" name="escolha" value="enderecoAluno">
					 	<span>Endereço</span>
					 </label>
				</p>

				<p>
					<label>
					 	<input type="radio" name="escolha" value="idadeAluno">
					 	<span>Idade</span>
					 </label>
				</p>


			</div>

			<div class="input-field col s6">

				<p>
					<label>
					 	<input type="radio" name="escolha" value="salarioAluno">
					 	<span>Salário</span>
					 </label>
				</p>

				<p>
					<label>
					 	<input type="radio" name="escolha" value="dataingressoAluno">
					 	<span>Data de Ingresso</span>
					 </label>
				</p>

				<p>
					<label>
					 	<input type="radio" name="escolha" value="cpfAluno">
					 	<span>CPF</span>
					 </label>
				</p>

				<p>
					<label>
					 	<input type="radio" name="escolha" value="areasInteresse">
					 	<span>Interesses</span>
					 </label>
				</p>

			</div>

			<center><div class="input-field col s12 m6">

				<button class="btn-large waves-effect waves-light purple" type="submit" name="procurar">Consultar
  				</button>

			</div></center>

		</form>

		<?php

			if(isset($_POST['procurar'])):

				$coluna = $_POST['escolha'];

				$sql = "SELECT $coluna FROM produtos";

				$consulta = mysqli_query($conexao, $sql);

				if($consulta):

		?>

		<table class="responsive-table row container centered white">
			
			<thead>
				<tr>
					<th>
						<?php echo $coluna; ?>
					</th>
				</tr>
			</thead>

			<tbody>
				<?php 

					while($linha = mysqli_fetch_assoc($consulta)):

				?>
				<tr>
					<td>
						<?php echo $linha[$coluna]; ?>
					</td>
				</tr>

				<?php 

					endwhile;

					endif;

					endif;
				?>

			</tbody>

		</table>

		<div class="row container">

			<div class="card-panel orange">

				<h1 class="flow-text center white-text">BACKUP DO BANCO</h1>

			</div>

		</div>

		<form class="row container white" method="post" action="pags_php/backup.php">
			
			<center><div class="input-field col s12">

				<button class="btn-large waves-effect waves-light green" type="submit" name="procurar">Fazer o Backup
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
						<img src="img/corre.gif" height="60">
					</div>
				</div>
			</div>

			<div class="footer-copyright">

				<div class="container">
					2018 @ Yan Alves - Estudante de Informática
				</div>

			</div>

		</footer>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/materialize.js"></script>
		<script type="text/javascript" src="js/jquerymaskedinput.js"></script>
		<script type="text/javascript" src="js/script-mascara.js"></script>

	</body>

</html>