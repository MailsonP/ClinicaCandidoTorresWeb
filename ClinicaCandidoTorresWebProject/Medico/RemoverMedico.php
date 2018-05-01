<?php
require_once '../util/daoGenerico.php';
require_once '../Medico/Medico.php';

$metodo = $_GET;
if(isset($metodo["medico"])){
    $id = $metodo["medico"];
   $medico = new Medico();
   $medico->valorpk = $id;
if($medico->deletar($medico)){
    echo "Medico deletado com Sucesso!!";
}else{
    echo "Erro ao deletar Medico";
}   
}