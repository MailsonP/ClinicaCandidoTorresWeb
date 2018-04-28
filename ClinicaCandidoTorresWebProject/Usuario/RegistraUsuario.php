<?php

require_once '../usuario/Usuario.php';

$metodo = $_POST;

//Recuperando valores do campo
if(isset($metodo["nome"])){
$nome = $metodo["nome"];
$login =$metodo["login"];
$senha = $metodo["senha"];
$tipo =$metodo["tipoUsuario"];

//Setando os valores no Objeto
$usuario = new Usuario();
$usuario->setValor("NOME", $nome);
$usuario->setValor("LOGIN", $login);
$usuario->setValor("SENHA", $senha);
$usuario->setValor("TIPOUSUARIO", $tipo);

if ($usuario->inserir($usuario)){
    echo  "<script>alert('usuário cadastrado com sucesso!');window.location = 'TelaCadastroUsuario.php';</script>";
   
}else{
    echo  "<script>alert('Este Login já está sendo utilizado em nosso sistema :/');window.history.back(1);</script>";
}

}


?>