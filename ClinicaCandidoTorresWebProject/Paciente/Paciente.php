<?php

require_once '../util/baseBD.php';
/**
 * Description of Paciente
 *
 * @author Felipe
 */
class Paciente extends baseBD {
    
    public function __construct($campos = array()) {
        parent::__construct();
        $this->tabela = "PACIENTE";
        if (sizeof($campos) <= 0) {
            $this->campos_valores = array(
                "NOME" => NULL,
                "SEXO" => NULL, "DATANASC" => NULL,"DATACADASTRO" => NULL, "CPF" => NULL, "RG" => NULL,"EMAIL" => NULL, "PROFISSAO" => NULL,
                "TELEFONE" => NULL, "CELULAR" => NULL, "INDICACAO" => NULL,"ESTADOCIVIL" => NULL,  
                "ENDERECO" => NULL,"BAIRRO" => NULL,"NUMERO" => NULL,"CIDADE" => NULL, "ESTADO" => NULL,
                "COMPLEMENTO" => NULL, "CEP" => NULL
            );
        } else {
            $this->campos_valores = $campos;
        }
        $this->campopk="IDPACIENTE";
    }

}
