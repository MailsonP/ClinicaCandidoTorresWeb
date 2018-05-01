<?php

include_once '../Medico/Medico.php';
session_start();


$Metodo = $_POST;
if(isset($Metodo["nome"])){    
    $nome = $Metodo["nome"];
    $telefone = $Metodo["telefone"];
    $email = $Metodo["email"];
    $dtanascimento = $Metodo["dtanascimento"];
    $conselho = $Metodo["conselho"];
    $especialidade = $Metodo["especialidade"];
    $funcao = $Metodo["funcao"];
    $tipodeatendimento = $Metodo["tipodeatendimento"];
    
    $medico = new Medico();
    $medico->setValor("NOME", $nome);
    $medico->setValor("TELEFONE", $telefone);
    $medico->setValor("EMAIL", $email);
    $medico->setValor("DTANASCIMENTO", $dtanascimento);
    $medico->setValor("CONSELHO", $conselho);
    $medico->setValor("ESPECIALIDADE", $especialidade);
    $medico->setValor("FUNCAO", $funcao);
    $medico->setValor("TIPODEATENDIMENTO", $tipodeatendimento);
    
    if($medico ->inserir($medico)){
        echo("Dado Cadastrado com Sucesso!!");
    }else{
        echo("Erro ao tentar Inserir os valores no Banco!!");
    }
}