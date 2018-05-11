<?php

include_once '../util/daoGenerico.php';
include_once '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';

class ValidarProntuario extends ConexaoDB{
    
    public function validaProntuario($numProntuario){
        
        $dao = new daoGenerico();
        
        $sql = "SELECT NUMEROPRONTUARIO FROM paciente WHERE NUMEROPRONTUARIO = '$numProntuario'";
        
        $resultado = mysqli_query($this->conexao, $sql);
        
        if($resultado){
            return $resultado;
        }else{
             echo "<script>alert('Erro ao tentar validar Prontuario!');window.location = '../Telas/Index.php';</script>";
        }
        
    }
    
    
}
