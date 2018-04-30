<?php

require_once '../usuario/Usuario.php';
session_start();

$metodo = $_POST;

//Recuperando valores do campo
if(isset($metodo["nome"])){
$nome = $metodo["nome"];
$login =$metodo["login"];
$senha = md5($metodo["senha"]);
$tipo =$metodo["tipoUsuario"];

//Setando os valores no Objeto
$usuario = new Usuario();
$usuario->setValor("NOME", $nome);
$usuario->setValor("LOGIN", $login);
$usuario->setValor("SENHA", $senha);
$usuario->setValor("TIPOUSUARIO", $tipo);

if ($usuario->inserir($usuario)){
    echo  "<script>alert('Usuário cadastrado com sucesso!');window.location = '../Telas/TelaCadastroUsuario.php';</script>";
   
}else{
    echo  "<script>alert('Erro ao tentar cadastrar o usuario no Sistema!:/');window.history.back(1);</script>";
}

}

?>