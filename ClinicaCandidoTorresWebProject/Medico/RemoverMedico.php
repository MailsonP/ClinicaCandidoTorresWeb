<?php
session_start();

require_once '../util/daoGenerico.php';
require_once '../Medico/Medico.php';

$metodo = $_GET;
if(isset($metodo["medico"])){
    $id = $metodo["medico"];
   $medico = new Medico();
   $medico->valorpk = $id;
if($medico->deletar($medico)){
    echo "
		<script>
			alert('Profissional deletado com sucesso!')
			location.href='TelaMedicoTable.php';
		</script>";
}else{
    echo "
		<script>
			alert('Não foi possivel deletar o médico.');
			location.href='TelaMedicoTable.php';
		</script>";
}   
}