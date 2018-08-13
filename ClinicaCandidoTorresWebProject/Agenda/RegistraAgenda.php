<?php
session_start();

include_once '../Agenda/Agenda.php';

$Metodo = $_POST;
if(isset($Metodo["paciente"])){
    $paciente = $Metodo["paciente"];
    $data = $Metodo["datadeatendimento"];
    $medico = $Metodo["medico"];
    $tipoAtendimento = $Metodo['tipoAtendimento'];
    $observacao = $Metodo['observacao'];
    $valor = $Metodo['valor'];
    $pagamento = $Metodo['pagamento'];
    
    $agenda = new Agenda();
    $agenda ->setValor("PACIENTE", $paciente);
    $agenda ->setValor("DATADEATENDIMENTO", $data);
    $agenda ->setValor("MEDICO", $medico);
    $agenda ->setValor("TIPOATENDIMENTO", $tipoAtendimento);
    $agenda ->setValor("OBSERVACAO", $observacao);
    $agenda ->setValor("VALOR", $valor);
    $agenda ->setValor("PAGAMENTO", $pagamento);
    
    
    
    if($agenda->inserir($agenda)){
        echo  "<script>alert('Agenda cadastrada com sucesso !');window.location = '../Agenda/TelaAgendaTable.php';</script>";
    }else{
        echo  "<script>alert('Você esqueceu de preencher algum campo obrigatório :/');window.history.back(1);</script>";
    }
    
}



