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
$usuario->setTipoUsuario($tipoUsuario);

//Recuperar Valores se Precisar.
$usuario->getNome();
$usuario->getLogin();
$usuario->getSenha();
$usuario->getTipoUsuario();

//Fazer o Metodo de Salvamento Aqui...














?>

