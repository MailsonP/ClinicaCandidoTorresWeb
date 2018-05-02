<?php

include_once '../util/daoGenerico.php';
include_once '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';

class ValidarLogin extends ConexaoDB {
    
    public function Autenticar($login, $senha){
        
        $dao = new daoGenerico();
        
	$sql = " SELECT * FROM usuario WHERE LOGIN = '$login'"
                . "AND senha = '$senha'";
        
        $resultado_id = mysqli_query($this->conexao, $sql);
        
        if($resultado_id){
            return $resultado_id;
        }else{
           echo "<script>alert('Erro ao tentar fazer Login!');window.location = '../Telas/Index.php';</script>";
        }
        
    }
}
