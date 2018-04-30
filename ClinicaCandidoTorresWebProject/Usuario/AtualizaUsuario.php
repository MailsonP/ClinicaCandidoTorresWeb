<?php

require_once '../util/daoGenerico.php';
require_once './Usuario.php';

$usuario = new Usuario();

//Recuperando o id do URL
$Metodo = $_GET;
if(isset($Metodo["usuario"])){
    $id = $Metodo["usuario"];
    
}

$txtTitulo = $_POST;
//Recuperando valores do campo
if(isset($txtTitulo["nome"])){
$nome = $txtTitulo["nome"];
$login =$txtTitulo["login"];
$senha = $txtTitulo["senha"];
$tipo =$txtTitulo["tipoUsuario"];

$usuario->setValor("NOME", $nome);
$usuario->setValor("LOGIN", $login);
$usuario->setValor("SENHA", $senha);
$usuario->setValor("TIPOUSUARIO", $tipo);

$usuario->valorpk = $id;

if ($usuario->atualizar($usuario)){
    echo  "<script>alert('Usuário atualizado com sucesso!');window.location = './TelaUsuarioTable.php';</script>";
}else{
    echo 'Houve um erro ao tentar atualizar os dados os Dados no banco';
}

}

?>