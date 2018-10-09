<?php	

	include_once("../../BancoDeDados/conexao.php");

	//RELATORIO POR MEDICO
	$ID_medic = $_POST['medico'];

	$html = '<table border="1" cellspacing="0" cellpadding="10" style="border-collapse: collapse; width:100%; white-space: nowrap; z-index: 1;">';	
	$html .= '<thead style="border-bottom: 1px solid black; font-size: 14px;">';
	$html .= '<tr>';
	$html .= '<th style="width: 5%; text-align: left;">ID</th>';
	$html .= '<th style="width: 30%; text-align: left;">Paciente</th>';
	$html .= '<th style="width: 15%; text-align: left;">Telefone</th>';
	$html .= '<th style="width: 20%; text-align: left;">Médico</th>';
	$html .= '<th style="width: 20%; text-align: left;">Atendimento</th>';
	$html .= '<th style="width: 10%; text-align: left;">Data</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody style="height: 5px; line-height: 5px; font-size: 12px;">';

	
	$result_transacoes = "SELECT G.IDAGENDA AS 'IDAGENDA', G.DATADEATENDIMENTO AS 'DATADEATENDIMENTO', P.NOME AS 'NOMEDOPACIENTE' ,M.NOME AS 'NOMEDOMEDICO',A.TIPOATENDIMENTO AS 'TIPODEATENDIMENTO', P.CELULAR AS 'CELULAR' FROM AGENDA AS G INNER JOIN PACIENTE AS P ON IDPACIENTE = ID_PACIENTE INNER JOIN MEDICO AS M ON IDMEDICO = ID_MEDICO INNER JOIN ATENDIMENTO AS A ON IDATENDIMENTO = ID_ATENDIMENTO WHERE ID_MEDICO = $ID_medic";

	$resultado = mysqli_query($conn, $result_transacoes);

	if(mysqli_num_rows($resultado) > 0 ){
		while($row_transacoes = mysqli_fetch_assoc($resultado)){
		$html .= '<tr style="border-bottom: 1px solid black"><td style="font-weight: 600; width: 5%;">'.$row_transacoes['IDAGENDA'] . "</td>";
		$html .= '<td style="width: 30%;">'.$row_transacoes['NOMEDOPACIENTE'] . "</td>";
		$html .= '<td style="width: 15%;">'.$row_transacoes['CELULAR'] . "</td>";
		$html .= '<td style="width: 20%;">'.$row_transacoes['NOMEDOMEDICO'] . "</td>";
		$html .= '<td style="width: 20%;">'.$row_transacoes['TIPODEATENDIMENTO'] . "</td>";
		$html .= '<td style="width: 10%;">'.date("d/m/Y", strtotime($row_transacoes['DATADEATENDIMENTO'])) . "</td></tr>";	
	}	
   }else{
   	   $html .= '<tr style="border-bottom: 1px solid black"><td style="font-weight: 600; width: 5%; text-align: center;" colspan="6">NENHUM RESULTADO ENCONTRADO</td></tr>';
   }
	
	$html .= '</tbody>';
	$html .= '</table>';
	$html .= '<div style="position: absolute; bottom: 0;"><h6 style="font-family: sans-serif; text-align: center; padding-bottom: -20px;">Campos Monteiro 1141 Centro, Av. Josefa Nogueira Monteiro,</h6>';
	$html .= '<h6 style="font-family: sans-serif; text-align: center; padding-bottom: -20px;">Icó - CE, 63430-000</h6>';
	$html .= '<h6 style="font-family: sans-serif; text-align: center;">(88) 99915-1098</h6></div>';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("../dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<div align="center"><img src="../../img/logo.png"></div>
			<h3 style="text-align: center; font-family: sans-serif; padding: -15px; margin: 0;">Clinica Cândido Torres</h3>
			<h4 style="text-align: center; font-family: sans-serif;">Relatório de Agenda</h4>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"Relatorio_CandidoTorres.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>