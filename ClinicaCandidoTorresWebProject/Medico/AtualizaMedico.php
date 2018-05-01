<?php

require_once '../util/daoGenerico.php';
require_once './Medico.php';

$medico = new Medico();
$metodo = $_GET;

if (isset($metodo["medico"])) {
    $id = $metodo["medico"];
}

$metodo2 = $_POST;
if(isset($metodo2["nome"])){
    $nome = $metodo2["nome"];
    $telefone = $metodo2["telefone"];
    $email = $metodo2["email"];
    $dtanascimento = $metodo2["dtanascimento"];
    $conselho = $metodo2["conselho"];
    $especialidade = $metodo2["especialidade"];
    $funcao = $metodo2["funcao"];
    $tipodeatendimento = $metodo2["tipodeatendimento"];
    
    $medico->setValor("NOME", $nome);
    $medico->setValor("TELEFONE", $telefone);
    $medico->setValor("EMAIL", $telefone);
    $medico->setValor("DTANASCIMENTO", $dtanascimento);
    $medico->setValor("CONSELHO", $conselho);
    $medico->setValor("ESPECIALIDADE", $especialidade);
    $medico->setValor("FUNCAO", $funcao);
    $medico->setValor("TIPODEATENDIMENTO", $tipodeatendimento);
    
    $medico->valorpk = $id;
    
    if($medico->atualizar($medico)){
        echo "Dado Atualizado com Sucesso!!";
    }else{
        echo "Erro ao Atualizar os Dados!!";
    }
    
    
}
