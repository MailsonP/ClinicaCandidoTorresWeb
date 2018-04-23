<?php
class usuariosVO{
	/*Método construtor da classe*/
	public function __construct(){}
	
	/*Evita que a classe seja clonada*/
	private function __clone(){}
	
	/*Método destrutor da classe*/
	public function __destruct() {
		foreach ($this as $key => $value) { 
			unset($this->$key); 
        }
		foreach(array_keys(get_defined_vars()) as $var) {
			unset(${"$var"});
		}
		unset($var);
	}
	
	/*Variáveis privadas que receberão os dados*/
	private $idUsuario = 0;
	private $login = "";
	private $senha = "";
        private $tipoUsuario = "";
	
	/*Metodos get e set que trazem o conteudo da variável privada desejada*/
	public function getIdusuario(){
		return $this->id;
	}
	public function setIdusuario($id){
		$this->id = intval($id);
	}
	
	public function getLogin(){
		return $this->login;
	}
	public function setLogin($login){
		$this->login = $login;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
        
        public function getTipoUsuario(){
		return $this->senha;
	}
	public function setTipoUsuario($senha){
		$this->senha = $senha;
	}
}