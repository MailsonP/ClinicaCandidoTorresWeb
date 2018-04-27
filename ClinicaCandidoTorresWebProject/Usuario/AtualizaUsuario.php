<?php

require_once '../util/daoGenerico.php';
require_once './Usuario.php';

$valorId = $_GET;
if (isset($valorId["usuario"])){
    $id = $valorId["usuario"];
}

 $txtTitulo = $_POST;
//Recuperando valores do campo
if(isset($txtTitulo["nome"])){
$nome = $txtTitulo["nome"];
$login =$txtTitulo["login"];
$senha = $txtTitulo["senha"];
$tipo =$txtTitulo["tipoUsuario"];

$usuario = new Usuario();
$usuario->setValor("NOME", $nome);
$usuario->setValor("LOGIN", $login);
$usuario->setValor("SENHA", $senha);
$usuario->setValor("TIPOUSUARIO", $tipo);

$usuario->valorpk = $id;

if ($usuario->atualizar($usuario)){
    echo 'Dados atualizados com Sucesso!';
}else{
    echo 'Houve um erro ao tentar atualizar os dados os Dados no banco';
}

}