<?php
session_start();

include_once '../Medico/Medico.php';

$Metodo = $_POST;
if(isset($Metodo["nome"])){    
    $nome = addslashes($Metodo["nome"]);
    $telefone = addslashes($Metodo["telefone"]);
    $email = $Metodo["email"];
    $email = preg_replace('/[^[:alnum:]@.]/','', $email);
    $dtanascimento = addslashes($Metodo["dtanascimento"]);
    $conselho = addslashes($Metodo["conselho"]);
    $especialidade = addslashes($Metodo["especialidade"]);
    $funcao = addslashes($Metodo["funcao"]);
    
    $medico = new Medico();
    $medico->setValor("NOME", $nome);
    $medico->setValor("TELEFONE", $telefone);
    $medico->setValor("EMAIL", $email);
    $medico->setValor("DTANASCIMENTO", date("Y/m/d", strtotime($dtanascimento)));
    $medico->setValor("CONSELHO", $conselho);
    $medico->setValor("ESPECIALIDADE", $especialidade);
    $medico->setValor("FUNCAO", $funcao);
    
    if($medico ->inserir($medico)){
         echo  "<script>alert('Profissional cadastrado com sucesso !');window.location = '../Telas/TelaCadastroMedico.php';</script>";
    }else{
        echo  "<script>alert('Você esqueceu de preencher algum campo obrigatório :/');window.history.back(1);</script>";
}
}