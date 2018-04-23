<?php

//Importando a Classe de Usuario
include '../Usuario/Usuario.php';

//Recuperando valores do Campo de Cadastro
$nome = filter_input(INPUT_POST, 'nome');
$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'senha');
$tipo_usuario = filter_input(INPUT_POST, 'tipoUsuario');

//Instanciando a classe Usuario
$usuario = new Usuario();

//Setando os valores
$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setSenha($senha);
$usuario->setTipoUsuario($tipo_usuario);

//Recuperar Valores se Precisar.
$nomeUsuario =  $usuario->getNome();
$loginUsuario = $usuario->getLogin();
$senhaUsuario = $usuario->getSenha();
$tipo = $usuario->getTipoUsuario();

// Author Hugo S.
require_once ('../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc');
include_once("../Usuario/UsuarioDAO.php");

$link = mysqli_connect("localhost","root","","clinica_candido_torres_database");
// Validação de utilização de login-> Procura no banco de dados se este login não está sendo utilizado.
$validaLogin = mysqli_query($link,"SELECT IDUSUARIO FROM USUARIO WHERE LOGIN = '$loginUsuario'") or die(mysqli_error($link));

// Verifica se a variável encontrou algum erro na procura do login e caso os dados não apresentem erros irá realizar a inserção dos dados.
if (mysqli_num_rows($validaLogin) == 1) {
    echo "Este Login já está sendo utilizado em nosso sistema.<br>, Por favor, rever o mesmo e tentar novamente!.<br>";
    $erro = 1;
} else{
    echo "Dados digitados corretamente, aguarde enquanto os salvamos...<br>";
    
    $usuarioDAO = new usuarioDAO();
    
    $campos = "nome, login, senha, tipoUsuario";
    $parametros = array("$usuario->getNome()","$usuario->getLogin()","$usuario->getSenha()","$usuario->getTipoUsuario()");
    $rs = $usuarioDAO->inserir($campos,$parametros);
    var_dump($rs);
}

$conexao->close();

