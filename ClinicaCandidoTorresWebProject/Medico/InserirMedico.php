<?php

include_once '../Medico/Medico.php';
session_start();


$Metodo = $_POST;
if(issert($Metodo["nome"])){    
    $nome = $Metodo["nome"];
    $telefone = $Metodo["telefone"];
    $email = $Metodo["email"];
    $dtanascimento = $Metodo["dtanascimento"];
    $conselho = $Metodo["conselho"];
    $especialidade = $Metodo["especialidade"];
    $funcao = $Metodo["funcao"];
    $tipodeatendimento = $Metodo["tipodeatendimento"];
    
    $medico = new Medico();
         
}