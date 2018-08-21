<?php

include_once '../util/daoGenerico.php';
include_once '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';

class ListarAgenda extends ConexaoDB {
    
    public function ListarDadosNaHome(){
        
        $dao = new daoGenerico();
       
        $sql = "SELECT P.NOME AS 'Paciente' ,M.NOME AS 'Médico',A.NOME AS 'Atendimento' FROM agenda AS G INNER JOIN paciente AS P ON IDPACIENTE = ID_PACIENTE INNER JOIN medico AS M ON IDMEDICO = ID_MEDICO INNER JOIN ATENDIMENTO AS A ON IDATENDIMENTO = ID_ATENDIMENTO WHERE G.DATADEATENDIMENTO BETWEEN CURRENT_DATE() AND CURRENT_DATE()+6";
        
        $resultado = mysqli_query($this->conexao, $sql);
        
        if($resultado){
            return $resultado;
        }else{
            echo "<script>alert('Erro ao tentar buscar medico no banco!');window.location = '../Telas/TelaCadastroUsuario.php';</script>";
        }
        
    }
   
}
