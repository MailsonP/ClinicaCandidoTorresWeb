<?php

include_once '../util/daoGenerico.php';
include_once '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';

class PesquisarMedicoPorId extends ConexaoDB {
    
    public function pesquisarMedicoID($id){
        
        $dao = new daoGenerico();
       
        $sql = "SELECT * FROM medico WHERE IDMEDICO  = '$id' ";
        
        $resultado = mysqli_query($this->conexao, $sql);
        
        if($resultado){
            return $resultado;
        }else{
            echo "<script>alert('Erro ao tentar buscar medico no banco!');window.location = '../Telas/TelaCadastroUsuario.php';</script>";
        }
        
    }
    
}
