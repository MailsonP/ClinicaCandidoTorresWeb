<?php

session_start();

include_once '../util/daoGenerico.php';
include_once '../Login/ValidarLogin.php';
include_once '../Usuario/Usuario.php';

$valida = new ValidarLogin();

$metodo = $_POST;
//Recuperando dados dos campos
if(isset($metodo["username"])){
    $login = $metodo["username"];
    $senha = md5($metodo["password"]);
}

//Chamando o metodo valida e passando por paramentro o login e a senha
$resultado = $valida->Autenticar($login, $senha);

//Recuperar o valor do objeto
$dados_usuario = mysqli_fetch_array($resultado);

if(isset($dados_usuario['LOGIN'])){

   $_SESSION["ID_USUARIO"] = $dados_usuario["IDUSUARIO"];
   $_SESSION["NOME_USUARIO"] = $dados_usuario["NOME"];
   $_SESSION["LOGIN_USUARIO"] = $dados_usuario["LOGIN"];
   
    echo  "<script>alert('Usuário cadastrado com sucesso!');</script>";
}else{
     echo  "<script>alert('Login ou senha Incorretos!');window.location = '../Telas/Index.php';</script>";


}





