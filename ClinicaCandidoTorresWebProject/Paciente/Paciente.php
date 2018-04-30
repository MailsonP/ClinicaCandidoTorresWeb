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
                "NUMEROPRONTUARIO" => NULL, "SEXO" => NULL, "DATANASC" => NULL, "CPF" => NULL, "RG" => NULL,
                "EMAIL" => NULL, "PROFISSAO" => NULL, "TIPOATENDIMENTO" => NULL, "ACOMPANHANTE" => NULL,
                "ESTRANGEIRO" => NULL, "TELEFONE" => NULL, "CELULAR" => NULL, "INDICACAO" => NULL,
                "ESTADOCIVIL" => NULL,  "ENDERECO" => NULL,"BAIRRO" => NULL,"NUMERO" => NULL,
                "CIDADE" => NULL, "ESTADO" => NULL, "COMPLEMENTO" => NULL, "CEP" => NULL
            );
        } else {
            $this->campos_valores = $campos;
        }
        $this->campopk="IDPACIENTE";
    }

}
