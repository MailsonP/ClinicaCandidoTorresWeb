<?php
session_start();

include_once '../util/daoGenerico.php';
include_once '../Agenda/Agenda.php';
include_once '../Login/ProtectPaginas.php';
include_once '../Paciente/Paciente.php';

protect();

$agenda = new Agenda();
$paci = new Paciente();

$metodo = $_GET;

        if (isset($metodo["IdAgenda"]) && $metodo["IdAgenda"] != null){
           
            $id = $metodo["IdAgenda"];
            $id = preg_replace('/[^[:alnum:]]/','', $id);
            $dataAtend = addslashes($_POST['datadeatendimento']);
            $observacao = addslashes($_POST['observacao']);
            $IDpaciente = addslashes($_POST['Idpaciente']);
            $IDmedico = addslashes($_POST["medico"]);
            $IDtipo_Atendi = addslashes($_POST["tipoatendimento"]);
           
           //PESQUISAR MEDICO E ATENDIMENTO PELO ID PARA ATUALIZAR
            
            $agenda->setValor("DATADEATENDIMENTO", date("Y-m-d",strtotime(str_replace('/','-',$dataAtend))));
            $agenda->setValor("OBSERVACAO", $observacao);
            $agenda->setValor("ID_PACIENTE",$IDpaciente);
            $agenda->setValor("ID_MEDICO", $IDmedico);
            $agenda->setValor("ID_ATENDIMENTO", $IDtipo_Atendi);
            
            $agenda->valorpk = $id;
            
        if($agenda->atualizar($agenda)){
            echo "<script>alert('AGENDA ATUALIZADA COM SUCESSO!!'); window.location = '../Agenda/TelaAgendaTable.php';</script>";
        
        }else{
            echo "<script>alert('NENHUM DADO FOI MODIFICADO!!'); window.location = '../Agenda/TelaAgendaTable.php';</script>";
            }
        
        }
     

