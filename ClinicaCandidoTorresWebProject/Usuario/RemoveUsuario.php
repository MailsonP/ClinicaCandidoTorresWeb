<?php
session_start();

require_once '../util/daoGenerico.php';
require_once './Usuario.php';

//Recuperar o id do usuario a ser Deletado
$Metodo = $_GET;
if(isset($Metodo["usuario"])){
    $id = $Metodo["usuario"];
    
    $usuario = new Usuario();
    $usuario->valorpk = $id;
    
    if ($usuario->deletar($usuario)){
        echo "
		<script>
			alert('Usuário deletado com sucesso!')
			location.href='TelaUsuarioTable.php';
		</script>";
    }else{
        echo "
		<script>
			alert('Não foi possivel deletar o usuario.');
			location.href='TelaUsuarioTable.php';
		</script>";
    }
}
