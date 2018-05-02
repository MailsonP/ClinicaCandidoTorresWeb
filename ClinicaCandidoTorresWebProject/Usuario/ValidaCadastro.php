<?php

    include_once '../util/daoGenerico.php';
    include_once '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';

class ValidaCadastro extends ConexaoDB {
    
    function validarCadastro($login){
        
        $dao = new daoGenerico();
        
        if (isset($login))
            
        $sql = " SELECT * FROM usuario WHERE LOGIN = '$login'";
        
        $resultado = mysqli_query($this->conexao, $sql);
        
        if($resultado){
            return $resultado;
        }else{
            echo 'Ocorreu um erro tentar validar o Cadastro.!';
        }
    }
}
       
