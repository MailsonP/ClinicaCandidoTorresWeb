<?php

require_once '../util/baseBD.php';
//autor - Jonathan
class Medico extends baseBD {
    public function __construct($campos=array()){
        parent::__construct();
        $this->tabela  = "medico";
        if(sizeof($campos)<=0){
            $this->campos_valores = array(
              "NOME" => NULL,
               "TELEFONE" => NULL,
                "EMAIL" => NULL,
                "DTANASCIMENTO" =>NULL,
                "CONSELHO" => NULL,
                "ESPECIALIDADE" => NULL,
                "FUNCAO" => NULL,
                "TIPODEATENDIMENTO" => NULL
            );
        }else{
            $this->campos_valores = $campos;
        }
        $this->campopk = "IDMEDICO";
    }   
  
}

