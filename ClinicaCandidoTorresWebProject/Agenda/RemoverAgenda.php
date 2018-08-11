<?php
session_start();

require_once '../util/daoGenerico.php';
require_once '../Agenda/Agenda.php';

$metodo = $_GET;
if(isset($metodo["agenda"])){
    $id = $metodo["agenda"];
    $agenda = new Agenda();
    $agenda->valorpk = $id;
    
    if($agenda->deletar($agenda)){
        echo "<script>alert('Agenda deletada com sucesso!');location.href='TelaAgendaTable.php';</script>";
    }else{
        
        echo "<script>alert('Nao foi possivel deletar a agenda.');location.href='TelaAgendaTable.php';</script>";
    }
}
