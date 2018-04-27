<?php

require_once '../util/baseBD.php';
//autor - Jonathan
class Usuario extends baseBD {
    public function __construct($campos=array()){
        parent::__construct();
        $this->tabela  = "USUARIO";
        if(sizeof($campos)<=0){
            $this->campos_valores = array(
              "NOME" => NULL,
               "LOGIN" => NULL,
                "SENHA" => NULL,
                "TIPOUSUARIO" =>NULL
            );
        }else{
            $this->campos_valores = $campos;
        }
        $this->campopk = "IDUSUARIO";
    }   
  
}