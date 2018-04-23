<?php
include_once ("usuariosVO.php");
include_once("database.php");

class usuarioDAO extends database{
    //Criando os métodos padrões de OO da classe
    public function __construct(){}

    private function __clone(){}
    
    public function __destruct(){
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
        foreach (array_keys(get_defined_vars()) as $var) {
            unset(${"$var"});
        }
        unset($var);
    }
    
    // Criando os métodos do CRUD
    
    public function carregar($campos="*", $add=""){
        if(strlen($add)>0) $add = " ".$add;
        $sql = "SELECT $campos FROM USUARIO$add";
        return $this->selectedDB($sql, null, 'usuariosVO');
    }
    
    public function inserir($campos, $parametros=null){
        $numeroParametros="";
        for ($i=0; $i<count($parametros); $i++) $numeroParametros.=",?";
        $numeroParametros = substr($numeroParametros, 1);
        $sql = "INSERT INTO USUARIO ($campos) VALUES ($numeroParametros)";
        $t= $this->insertDB($sql, $parametros);
        return $t;
    }
    
    public function atualizar($campos, $parametros=null, $where=null){
        $campos_T="";
        for ($i=0; $i<count($campos); $i++) $campos_T.=", $campos[$i] = ?";
        $campos_T = substr($campos_T, 2);
        $sql = "UPDATE USUARIO SET $campos_T";
        if (isset($where)) $sql .=" WHERE $where";
        $t= $this->updateDB($sql, $parametros);
        return $t;
    }
    
    public function apagar($where=null, $parametros=null){
        $sql = "DELETE FROM USUARIO";
        if (isset($where)) $sql .="WHERE $where";
        $t= $this->deeleteDB($sql,$parametros);
        return $t;
    }
}