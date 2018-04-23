<?php

// Author - Hugo S.
include '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';
include_once("../Usuario/UsuarioDAO.php");
$usuariosDAO = new usuariosDAO();
 
$campos = "nome, login, senha, tipoUsuario";

// editar, é preciso pegar o id e colocar ao final do parâmetro.
$parametros = array("$usuario->getNome()","$usuario->getLogin()","$usuario->getSenha()","$usuario->getTipoUsuario()",3);
$where = "IDUSUARIO = ?";
$rs = $usuariosDAO->update($fields,$params,$where);
var_dump($rs);

