<?php

include_once '../util/daoGenerico.php';
include_once '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';

class PesquisarPacientePorID extends ConexaoDB {
    
    public function pesquisarPacienteID($id){
        
        $dao = new daoGenerico();
       
        $sql = "SELECT * FROM paciente WHERE IDPACIENTE  = '$id' ";
        
        $resultado = mysqli_query($this->conexao, $sql);
        
        if($resultado){
            return $resultado;
        }else{
            echo "<script>alert('Erro ao tentar buscar paciente no banco!');window.location = '../Telas/TelaCadastroUsuario.php';</script>";
        }
        
    }
    
}
