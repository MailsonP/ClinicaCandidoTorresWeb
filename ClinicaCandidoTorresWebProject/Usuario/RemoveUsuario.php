<?php

require_once '../util/daoGenerico.php';
require_once './Usuario.php';

//Recuperar o id do usuario a ser Deletado
$Metodo = $_GET;
if(isset($Metodo["usuario"])){
    $id = $Metodo["usuario"];
    
    $usuario = new Usuario();
    $usuario->valorpk = $id;
    
    if ($usuario->deletar($usuario)){
        echo 'Dado removido com Sucesso!';
    }else{
        echo 'Não foi possivel executar a query de remoção!';
    }
}
