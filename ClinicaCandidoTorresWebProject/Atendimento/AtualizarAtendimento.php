<?php
session_start();
require_once '../util/daoGenerico.php';
require_once './Atendimento.php';

include_once '../Login/ProtectPaginas.php';
protect();

$atendimento = new Atendimento();
$metodo = $_GET;



if (isset($metodo["atendimento"])){
    $id = $metodo["atendimento"];
    
}

$metodo3 = $_POST;
if(isset($metodo3["nome"])){
    $nome = $metodo3["nome"];
   
    
    $atendimento ->setValor("TIPOATENDIMENTO", $nome);
   
    $atendimento->valorpk = $id;
    
    if($atendimento->atualizar($atendimento)){
        echo "<script>alert('Atendimento atualizado com sucesso'); window.location = '../Atendimento/TelaAtendimentoTable.php';</script>";
    }else{
         echo "<script>alert('Atendimento nao atualizado.'); window.history.back(1);</script>";
    }
}