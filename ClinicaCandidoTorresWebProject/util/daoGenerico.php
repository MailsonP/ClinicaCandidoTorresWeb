<?php

require_once '../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';

class daoGenerico extends ConexaoDB {
    
    public function inserir($objeto){
       $sql = "INSERT INTO ".$objeto->tabela." (";
       for($i=0; $i<count($objeto->campos_valores); $i++){
           $sql .= key($objeto->campos_valores);
           if($i< (count($objeto->campos_valores)-1)){
               $sql .=", ";
           }else{
               $sql .=") ";
           }
           next($objeto->campos_valores);     
        }
        reset($objeto->campos_valores);
        $sql .= "VALUES (";
        for($i=0; $i<count($objeto->campos_valores); $i++){
           $sql .= is_numeric($objeto->campos_valores[key($objeto->campos_valores)]) ?
                   $objeto->campos_valores[key($objeto->campos_valores)] :
                   "'".$objeto->campos_valores[key($objeto->campos_valores)]."'";
           if($i< (count($objeto->campos_valores)-1)){
               $sql .=", ";
           }else{
               $sql .=") ";
           }
           next($objeto->campos_valores);     
        }
            //echo $sql;
           return $this->executaSQL($sql);
       }
       
   public function atualizar($objeto){
           $sql = "UPDATE ".$objeto->tabela." SET ";
       for($i=0; $i<count($objeto->campos_valores); $i++){
           $sql .= key($objeto->campos_valores)."=";
           $sql .= is_numeric($objeto->campos_valores[key($objeto->campos_valores)]) ?
                   $objeto->campos_valores[key($objeto->campos_valores)] :
                   "'".$objeto->campos_valores[key($objeto->campos_valores)]."'";
           if($i< (count($objeto->campos_valores)-1)){
               $sql .=", ";
           }else{
               $sql .=" ";
           }
           next($objeto->campos_valores);     
        }
        $sql .= "WHERE ".$objeto->campopk."=";
        $sql .= is_numeric($objeto->valorpk) ? $objeto->valorpk : "'".$objeto->valorpk."'";

           return $this->executaSQL($sql);
   }
   
   public function deletar($objeto){
        $sql = "DELETE FROM ".$objeto->tabela;
         
        $sql .= " WHERE ".$objeto->campopk."=";
        $sql .= is_numeric($objeto->valorpk) ? $objeto->valorpk : "'".$objeto->valorpk."'";
         
           return $this->executaSQL($sql);
    }
    
     public function pesquisarID($objeto){
        $sql = " SELECT * FROM ".$objeto->tabela;
      
        $sql .= "  WHERE ".$objeto->campopk."=";
        $sql .= is_numeric($objeto->valorpk) ? $objeto->valorpk : "'".$objeto->valorpk."'";
         
        //echo $sql;
        return $this->executaSQL($sql);
    }
    
    public function retornaTudo($objeto){
       $sql = "SELECT * FROM ".$objeto->tabela;
       if($objeto->extra_select!=null){
           $sql .= " ".$objeto->extra_select;
       }
       return $this->executaSQL($sql);
   }
   
    public function retornaCampos($objeto){
        $sql = "SELECT ";
         for($i=0; $i<count($objeto->campos_valores); $i++){
           $sql .= key($objeto->campos_valores);
           if($i< (count($objeto->campos_valores)-1)){
               $sql .=", ";
           }else{
               $sql .=" ";
           }
           next($objeto->campos_valores);     
        }
        
        $sql .= " FROM ".$objeto->tabela;
       if($objeto->extra_select!=null){
           $sql .= " ".$objeto->extra_select;
       }
       return $this->executaSQL($sql);
   }
   
   public function executaSQL($sql=null){
       if ($sql != null){
           $query = mysqli_query($this->conexao, $sql) or $this->trataErro(__FILE__,__FUNCTION__);
           $this->linhaAfetada = mysqli_affected_rows($this->conexao);
           if(substr(trim(strtolower($sql)),0,6)=='select'){
               $this->dataset = $query;
               return $query;
           }else{
               return $this->linhaAfetada;
           }
       }
   }
   
   public function retornaDados($tipo=null){
       switch(strtolower($tipo)){
           case "array":
               return mysqli_fetch_array($this->dataset);
               break;
           case "assoc":
               return mysqli_fetch_assoc($this->dataset);
               break;
           case "object":
               return mysqli_fetch_object($this->dataset);
               break;
       }
   }
}
