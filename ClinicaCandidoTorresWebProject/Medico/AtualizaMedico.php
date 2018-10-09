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
    $id = preg_replace('/[^[:alnum:]]/','', $id);
}

$metodo2 = $_POST;
if(isset($metodo2["nome"])){
    $nome = addslashes($metodo2["nome"]);
    $telefone = addslashes($metodo2["telefone"]);
    $email = $metodo2["email"];
    $email = preg_replace('/[^[:alnum:]@.]/','', $email);
    $dtanascimento = addslashes($metodo2["dtanascimento"]);
    $conselho = addslashes($metodo2["conselho"]);
    $especialidade = addslashes($metodo2["especialidade"]);
    $funcao = addslashes($metodo2["funcao"]);
    
    $medico->setValor("NOME", $nome);
    $medico->setValor("TELEFONE", $telefone);
    $medico->setValor("EMAIL", $email);
    $medico->setValor("DTANASCIMENTO", date("Y-m-d",strtotime(str_replace('/','-',$dtanascimento))));
    $medico->setValor("CONSELHO", $conselho);
    $medico->setValor("ESPECIALIDADE", $especialidade);
    $medico->setValor("FUNCAO", $funcao);
    
    $medico->valorpk = $id;
    
    if($medico->atualizar($medico)){
        echo  "<script>alert('Profissional atualizado com sucesso !');window.location = '../Medico/TelaMedicoTable.php';</script>";
    }else{
        echo "<script>alert('Não foi modificado nada ainda.');window.history.back(1);</script>";
    }
    
    
}
