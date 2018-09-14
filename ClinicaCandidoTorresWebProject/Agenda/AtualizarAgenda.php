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
        
            $dataAtend = $_POST['datadeatendimento'];
            $observacao = $_POST['observacao'];
            $valor = $_POST['valor'];
            $pagamento = $_POST['pagamento'];
            $IDpaciente = $_POST['Idpaciente'];
            $IDmedico = $_POST["medico"];
            $IDtipo_Atendi = $_POST["tipoatendimento"];
           
           //PESQUISAR MEDICO E ATENDIMENTO PELO ID PARA ATUALIZAR
            
            $agenda->setValor("DATADEATENDIMENTO", date("Y-m-d",strtotime(str_replace('/','-',$dataAtend))));
            $agenda->setValor("OBSERVACAO", $observacao);
            $agenda->setValor("VALOR", $valor);
            $agenda->setValor("PAGAMENTO", $pagamento);
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
     

