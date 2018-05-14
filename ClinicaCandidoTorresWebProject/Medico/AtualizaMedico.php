<?php
session_start();
require_once '../util/daoGenerico.php';
require_once './Medico.php';

include_once '../Login/ProtectPaginas.php';
protect();

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
    $medico->setValor("EMAIL", $email);
    $medico->setValor("DTANASCIMENTO", $dtanascimento);
    $medico->setValor("CONSELHO", $conselho);
    $medico->setValor("ESPECIALIDADE", $especialidade);
    $medico->setValor("FUNCAO", $funcao);
    $medico->setValor("TIPODEATENDIMENTO", $tipodeatendimento);
    
    $medico->valorpk = $id;
    
    if($medico->atualizar($medico)){
        echo  "<script>alert('Profissional atualizado com sucesso !');window.location = '../Medico/TelaMedicoTable.php';</script>";
    }else{
        echo "<script>alert('Não foi modificado nada ainda.');window.history.back(1);</script>";
    }
    
    
}
