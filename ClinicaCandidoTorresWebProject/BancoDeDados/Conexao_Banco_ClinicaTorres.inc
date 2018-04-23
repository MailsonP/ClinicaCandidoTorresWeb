<?php

//Criando a conexão ao banco de dados
$conexao = mysqli_connect("127.0.0.1", "root", "", "clinica_candido_torres_database");
//Ajustando Charset
mysqli_set_charset($conexao, 'utf8');

// Mensagem de Erro, em caso de falha na conexão.
if($conexão->connect_error) {
    die("Falha ao realizar a conexão: ".$conexao->connect_error);
}

?>