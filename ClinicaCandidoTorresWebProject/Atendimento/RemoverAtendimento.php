<?php
session_start();

require_once '../util/daoGenerico.php';
require_once '../Atendimento/Atendimento.php';

$metodo = $_GET;
if(isset($metodo["atendimento"])){
    $id = $metodo["atendimento"];
    $atendimento = new Atendimento();
    $atendimento->valorpk = $id;
    
    if($atendimento->deletar($atendimento)){
        echo "<script>alert('Atendimento deletada com sucesso!');location.href='TelaAtendimentoTable.php';</script>";
    }else{
        
        echo "<script>alert('Nao foi possivel deletar o atendimento.');location.href='TelaAtendimentoTable.php';</script>";
    }
}
