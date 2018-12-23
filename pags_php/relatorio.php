
<?php
	
	require_once('../fpdf/fpdf.php');
	require_once('conexao_bd.php');

	class PDF extends FPDF{

		function Header(){

			$this->Image('../img/icon.png', 10, 6, 30);

			$this->SetFont('Arial', 'B', 15);

			$this->Cell(80);

			$this->Cell(20, 10, 'SISTEMA DE ALUNOS - DADOS DO ALUNO', 6, 0, 'C');

			$this->Ln(20);

		}

		function Footer(){

			$this->SetY(-15);

			$this->SetFont('Arial', 'I', 8);

			$this->Cell(0, 10, 'page' . $this->PageNo() . '\{nb}', 0, 0, 'C');

		}

	}

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times', '', 12);

	$cpf = $_GET['cpf'];

	$sql = "SELECT * FROM produtos WHERE cpfAluno = '$cpf'";

	$resultado = mysqli_query($conexao, $sql);

	while($linha = mysqli_fetch_assoc($resultado)):

		$pdf->Cell(0, 10, 'CPF Aluno: ' . $linha['cpfAluno'], 0, 1);
		$pdf->Cell(0, 10, 'Nome Aluno: ' . $linha['nomeAluno'], 0, 1);
		$pdf->Cell(0, 10, 'Data Nascimento Aluno: ' . $linha['datanascimentoAluno'], 0, 1);
		$pdf->Cell(0, 10, utf8_decode('Endereço Aluno: ') . $linha['enderecoAluno'], 0, 1);
		$pdf->Cell(0, 10, 'Idade Aluno: ' . $linha['idadeAluno'], 0, 1);
		$pdf->Cell(0, 10, 'Data Ingresso Aluno: ' . $linha['dataingressoAluno'], 0, 1);
		$pdf->Cell(0, 10, utf8_decode('Salário Aluno: ') . $linha['salarioAluno'] . " R$", 0, 1);
		$pdf->Cell(0, 10, utf8_decode('Áreas Interesse: ') . $linha['areasInteresse'], 0, 1);

	endwhile;

	$pdf->Output();

?>
