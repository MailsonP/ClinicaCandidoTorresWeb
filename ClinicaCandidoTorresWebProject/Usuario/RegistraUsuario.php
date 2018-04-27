<?php

require_once './Usuario.php';

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
    echo 'Dados salvos com Sucesso!';
   
}else{
    echo 'Houve um erro ao tentar salvar os Dados no banco';
}

}


?>