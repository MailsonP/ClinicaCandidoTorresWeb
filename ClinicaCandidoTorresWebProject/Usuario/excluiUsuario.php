<?php

// Author - Hugo S.
include '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';
include_once("../Usuario/UsuarioDAO.php");
$usuariosDAO = new usuarioDAO();

$where = "IDUSUARIO = ?";
// Aqui viria o id do usuário, e necessário pegar este id.
$parametros = array(3);

$rs = $usuariosDAO->apagar($where, $parametros);
var_dump($rs);