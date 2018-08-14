<?php

require_once '../util/baseBD.php';

class Agenda extends baseBD {
    public function __construct($campos=array()){
        parent::__construct();
        $this->tabela = "agenda";
        if(sizeof($campos)<=0){
            $this->campos_valores = array(
            "PACIENTE" => NULL,
            "DATADEATENDIMENTO" => NULL,
            "MEDICO" => NULL,
            "TIPOATENDIMENTO" => NULL,
            "OBSERVACAO" => NULL,
            "VALOR" => NULL,
            "PAGAMENTO" => NULL,
            "ID_PACIENTE" => NULL,
            "ID_MEDICO" => NULL,
            "ID_ATENDIMENTO" => NULL
            );
            
        }else{
            $this->campos_valores = $campos;
        }
            
        $this->campopk = "IDAGENDA";
    }
    
    
 }



 