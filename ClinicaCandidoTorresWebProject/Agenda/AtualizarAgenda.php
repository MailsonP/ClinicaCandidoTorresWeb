<?php
session_start();
require_once '../util/daoGenerico.php';
require_once './Agenda.php';

include_once '../Login/ProtectPaginas.php';
protect();

$agenda = new Agenda();
$metodo = $_GET;



if (isset($metodo["agenda"])){
    $id = $metodo["agenda"];
    
}

$metodo3 = $_POST;
if(isset($metodo3["paciente"])){
    $paciente = $metodo["idpaciente"];
    $data = $metodo3["datadeatendimento"];
    $IDmedico = $metodo["idmedico"];
    $IDtipoAtendimento = $metodo['idatendimento'];
    $observacao = $metodo3['observacao'];
    $valor = $metodo3['valor'];
    $pagamento = $metodo3['pagamento'];
    
    $agenda ->setValor("PACIENTE", $paciente);
    $agenda ->setValor("DATADEATENDIMENTO", $data);
    $agenda ->setValor("OBSERVACAO", $observacao);
    $agenda ->setValor("VALOR", $valor);
    $agenda ->setValor("PAGAMENTO", $pagamento);
    $agenda->setValor("ID_PACIENTE",$paciente);
    $agenda->setValor("ID_MEDICO", $IDmedico);
    $agenda->setValor("ID_ATENDIMENTO", $IDtipoAtendimento);
    
    $agenda->valorpk = $id;
    
    if($agenda->atualizar($agenda)){
        echo "<script>alert('Agenda atualizada com sucesso'); window.location = '../Agenda/TelaAgendaTable.php';</script>";
    }else{
         echo "<script>alert('Agenda nao atualizada.'); window.history.back(1);</script>";
    }
}