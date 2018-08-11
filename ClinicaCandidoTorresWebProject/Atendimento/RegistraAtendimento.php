<?php
session_start();

include_once '../Atendimento/Atendimento.php';

$Metodo = $_POST;
if(isset($Metodo["nome"])){
    $nome = $Metodo["nome"];
   
    
    $atendimento = new Atendimento();
    $atendimento ->setValor("NOME", $nome);
    
    if($atendimento->inserir($atendimento)){
        echo  "<script>alert('Tipo de Atendimento cadastrado com sucesso !');window.location = '../Telas/';</script>";
    }else{
        echo  "<script>alert('Você esqueceu de preencher algum campo obrigatório :/');window.history.back(1);</script>";
    }
    
}



