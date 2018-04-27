<?php

require_once '../util/daoGenerico.php';

abstract class baseBD extends daoGenerico {
    
    public $tabela = "";
    public $campos_valores = array();
    public $campopk = null;
    public $valorpk = null;
    public $extra_select = "";
    
    
    public function addcampo($campo=null, $valor=null){
        if ($campo != null){
            $this->campos_valores[$campo] = $valor;
        }
    }

    public function delCampo($campo = null){
        if(array_key_exists($campo, $this->campos_valores)){
            unset($this->campos_valores[$campo]);
        }
    }
    
    public function setValor($campo=null, $valor=null){
        if($campo != null && $valor != null){
            $this->campos_valores[$campo] = $valor;
        }
    }
    
    public function getValor($campo = null){
        if ($campo != null && array_key_exists($campo, $this->campos_valores)){
            return $this->campos_valores[$campo];
        }else{
            return false;
        }
    }
}
