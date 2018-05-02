<?php
session_start();

require_once '../util/daoGenerico.php';
require_once '../usuario/Usuario.php';
require_once './ValidaCadastro.php';

$valida = new ValidaCadastro();

$metodo = $_POST;

//Recuperando valores do campo
if(isset($metodo["login"])){
$nome = $metodo["nome"];
$login =$metodo["login"];
$senha = md5($metodo["senha"]);
$tipo =$metodo["tipoUsuario"];


$resultado = $valida->validarCadastro($login);

$dados_cadastro = mysqli_fetch_array($resultado);


if(!isset($dados_cadastro["LOGIN"])){

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

}else{
   echo "<script>alert('O Login informado ja existe.!');window.location = '../Telas/TelaCadastroUsuario.php';</script>";
}

}

?>