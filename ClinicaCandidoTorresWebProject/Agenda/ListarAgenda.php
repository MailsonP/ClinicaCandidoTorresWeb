<?php

include_once '../util/daoGenerico.php';
include_once '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';

class ListarAgenda extends ConexaoDB {
    
    public function ListarDadosNaHome(){

        $dia_inicial=date("d"); //Dia corrente
$dia_final=date("d")+7; //Quajntidade de dias

$mes_inicial=date("m"); //Mês corrente
$mes_final=date("m")+1; //Pegando o próximo mês

$ano_atual=date("Y"); //Mês corrente


if($mes_final=="13"){ $mes_final="01"; } //Ao trocar o ano

$num_dias=date("t"); //Números de dias

if($num_dias<$dia_final){ //Corrigindo o mês com a soma dos dias úteis
$subtracao=$dia_final-$num_dias;
$dia_final=$subtracao;
if(strlen($dia_final)==1){ $dia_final="0".$dia_final; }
if(strlen($mes_final)==1){ $mes_final="0".$mes_final; }
$data_final=$ano_atual."-".$mes_final."-".$dia_final;
$valor=1;
}else{
$data_final=$ano_atual."-".$mes_inicial."-".$dia_final;
$valor=0;
}
$data_inicial=$ano_atual."-".$mes_inicial."-".$dia_inicial;
        
        $dao = new daoGenerico();
       //Mudança de dados no banco
        $sql = "SELECT G.DATADEATENDIMENTO AS 'DataAtendimento', P.NOME AS 'Paciente' ,M.NOME AS 'Médico',A.TIPOATENDIMENTO AS 'Atendimento' FROM agenda AS G INNER JOIN paciente AS P ON IDPACIENTE = ID_PACIENTE INNER JOIN medico AS M ON IDMEDICO = ID_MEDICO INNER JOIN ATENDIMENTO AS A ON IDATENDIMENTO = ID_ATENDIMENTO WHERE G.DATADEATENDIMENTO BETWEEN '$data_inicial' AND '$data_final'";
        $resultado = mysqli_query($this->conexao, $sql);
        
        if($resultado){
            return $resultado;
        }else{
            echo "<script>alert('Erro ao tentar buscar medico no banco!');window.location = '../Telas/TelaCadastroUsuario.php';</script>";
        }
        
    }
   
}
