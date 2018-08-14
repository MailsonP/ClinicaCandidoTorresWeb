<?php

include_once '../util/daoGenerico.php';
include_once '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';

class PesquiarAtedimentoPorId extends ConexaoDB {
    
        public function pesquisarAtedimentoID($id){
        
        $dao = new daoGenerico();
       
        $sql = "SELECT * FROM atendimento WHERE IDATENDIMENTO = '$id' ";
        
        $resultado = mysqli_query($this->conexao, $sql);
        
        if($resultado){
            return $resultado;
        }else{
            echo "<script>alert('Erro ao tentar buscar atendimento no banco!');window.location = '../Telas/TelaCadastroUsuario.php';</script>";
        }
        
    }
   
}
