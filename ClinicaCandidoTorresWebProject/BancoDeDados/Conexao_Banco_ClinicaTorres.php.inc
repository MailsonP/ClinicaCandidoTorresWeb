<?php   

abstract class ConexaoDB {
    
    public $servidor = "localhost";
    public $usuario = "root";
    public $senha = "";
    public $nomeBanco = "clinica_candido_torres_database";
    public $conexao = null;
    public $dataset = null;
    public $linhaAfetada = -1 ;
    
    function __construct() {
        $this->conecta();
    }
    
    function __destruct() {
        if ($this->conexao !=null){
            mysqli_close($this->conexao);
        }
    }

    public function conecta(){
    $this ->conexao = mysqli_connect($this->servidor,$this->usuario,$this->senha) 
            or die ($this->trataErro(__FILE__,__FUNCTION__, mysqli_errno(), mysqli_error(), TRUE));
    
    mysqli_select_db($this->conexao, $this->nomeBanco) or die ($this->trataErro(__FILE__,__FUNCTION__, mysqli_errno(), mysqli_error(),TRUE));
    mysqli_set_charset($this->conexao, 'utf8'); //Deixa o banco padrão utf8
    
    echo 'Conexao Feita com Sucesso';
   }
   
   //Metodo que tratara todos os erros de Conexao
   public function trataErro($arquivo=null,$rotina=null,$numerro=null,$mserro=null,$geraException=false){
       if($arquivo==null) $arquivo = "nao informado";
       if($rotina==null) $rotina = "nao informado";
       if($numerro==null) $numerro = mysqli_errno($this->conexao);
       if($mserro==null) $mserro = mysqli_error($this->conexao);
            $resultado = 'Ocorreu um erro com os seguintes detalhes: <br />
                 <strong>Arquivo:</strong>'.$arquivo.'<br />
                 <strong>Rotina:</strong>'.$rotina.'<br />
                 <strong>Codigo:</strong>'.$numerro.'<br />
                 <strong>Mensagem:</strong>'.$mserro;
        
        if($geraException==FALSE){
            echo $resultado;
        } else {
            die($resultado);
        }    
   }
}