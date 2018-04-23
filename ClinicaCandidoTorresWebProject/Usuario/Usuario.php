<?php
    
//autor - Jonathan
class Usuario {
    
    //Criando os atributos
    private $nome;
    private $login;
    private $senha;
    private $tipoUsuario;
    
    //Gerando os Geets e Seets
    function setNome($nome){
        $this->nome = $nome;
    }
    
    function setLogin($login){
        $this->login = $login;
    }
    
     function setSenha($senha){
        $this->senha = $senha;
    }
    
     function setTipoUsuario($tipoUsuario){
        $this -> tipoUsuario = $tipoUsuario;
    }
    
    function getNome(){
        return $this->nome;
    }
    
    function getLogin(){
        return $this->login;
    }
    
    function getSenha(){
        return $this->senha;
    }
    
    function getTipoUsuario(){
        return $this->tipoUsuario;
    }
    
}
