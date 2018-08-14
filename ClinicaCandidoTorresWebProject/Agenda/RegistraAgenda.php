<?php

session_start();

include_once '../Agenda/Agenda.php';
include_once '../Medico/Medico.php';
include_once '../Atendimento/Atendimento.php';
include_once '../Medico/Pesquisar.php';
include_once '../Atendimento/Pesquisar.php';

$medico = new PesquisarMedicoPorId();
$atendimento = new PesquiarAtedimentoPorId();

$Metodo2 = $_GET;
$idPaciente = $Metodo2["idPaciente"];


$Metodo = $_POST;
if (isset($Metodo["paciente"])) {
    $Nomepaciente = $Metodo["paciente"];
    $data = $Metodo["datadeatendimento"];
    $IDmedico = $Metodo["medico"];
    $IDtipoAtendimento = $Metodo['tipoAtendimento'];
    $observacao = $Metodo['observacao'];
    $valor = $Metodo['valor'];
    $pagamento = $Metodo['pagamento'];

    
    //Pesquisar Por id
    $dados_medico = $medico->pesquisarMedicoID($IDmedico);
    $dados_atendimento = $atendimento->pesquisarAtedimentoID($IDtipoAtendimento);

    //Recuperar os valores dos metodos de pesquisa
    $nomeMedico = mysqli_fetch_array($dados_medico);
    $nomeAtendimento = mysqli_fetch_array($dados_atendimento);


    $agenda = new Agenda();
    $agenda->setValor("PACIENTE", $Nomepaciente);
    $agenda->setValor("DATADEATENDIMENTO", $data);
    $agenda->setValor("MEDICO", $nomeMedico["NOME"]);
    $agenda->setValor("TIPOATENDIMENTO", $nomeAtendimento["NOME"]);
    $agenda->setValor("OBSERVACAO", $observacao);
    $agenda->setValor("VALOR", $valor);
    $agenda->setValor("PAGAMENTO", $pagamento);
    $agenda->setValor("ID_PACIENTE",$idPaciente);
    $agenda->setValor("ID_MEDICO", $IDmedico);
    $agenda->setValor("ID_ATENDIMENTO", $IDtipoAtendimento);


    if ($agenda->inserir($agenda)) {
        echo "<script>alert('Agenda cadastrada com sucesso !');window.location = '../Agenda/TelaAgendaTable.php';</script>";
    } else {
        echo "<script>alert('Você esqueceu de preencher algum campo obrigatório :/');window.history.back(1);</script>";
    }
}



