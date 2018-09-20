<?php	

	include_once("../../BancoDeDados/conexao.php");

	$html = '<table cellspacing="0" cellpadding="10" border="1" style="margin: 0 auto;">';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Paciente</th>';
	$html .= '<th>Telefone</th>';
	$html .= '<th>Médico</th>';
	$html .= '<th>Atendimento</th>';
	$html .= '<th>Data</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';

	
	$result_transacoes = "SELECT G.IDAGENDA AS 'IDAGENDA', G.DATADEATENDIMENTO AS 'DATADEATENDIMENTO', P.NOME AS 'NOMEDOPACIENTE' ,M.NOME AS 'NOMEDOMEDICO',A.TIPOATENDIMENTO AS 'TIPODEATENDIMENTO', P.CELULAR AS 'CELULAR' FROM AGENDA AS G INNER JOIN PACIENTE AS P ON IDPACIENTE = ID_PACIENTE INNER JOIN MEDICO AS M ON IDMEDICO = ID_MEDICO INNER JOIN ATENDIMENTO AS A ON IDATENDIMENTO = ID_ATENDIMENTO";
	$resultado_trasacoes = mysqli_query($conn, $result_transacoes);
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){
		$html .= '<tr style="text-transform: capitalize;"><td style="font-weight: 600;">'.$row_transacoes['IDAGENDA'] . "</td>";
		$html .= '<td>'.$row_transacoes['NOMEDOPACIENTE'] . "</td>";
		$html .= '<td>'.$row_transacoes['CELULAR'] . "</td>";
		$html .= '<td>'.$row_transacoes['NOMEDOMEDICO'] . "</td>";
		$html .= '<td>'.$row_transacoes['TIPODEATENDIMENTO'] . "</td>";
		$html .= '<td>'.date("d/m/Y", strtotime($row_transacoes['DATADEATENDIMENTO'])) . "</td></tr>";		
	}
	
	$html .= '</tbody>';
	$html .= '</table>';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("../dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Relatório de Agenda</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>