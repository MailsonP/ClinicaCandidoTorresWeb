<?php
session_start();
require_once '../Paciente/Paciente.php';
/**
 * Description of Paciente
 *
 * @author Felipe
 */
$metodo = $_POST;

//PEGANDO VALORES DOS CAMPOS
if (isset($metodo["txtNome"])) {
    $nome = $metodo["txtNome"];
    $numeroProntuario = $metodo["txtNum"];
    $sexo = $metodo["cxSexo"];
    $datanasc = $metodo["txtDataNasc"];
    $cpf = $metodo["txtCPF"];
    $rg = $metodo["txtRG"];
    $email = $metodo["txtEmail"];
    $profissao = $metodo["txtProfissao"];
    $tipoAtendimento = $metodo["txtAtendimento"];
    $acompanhante = $metodo["txtAcompanhante"];
    $telefone = $metodo["txtTelefone"];
    $celular = $metodo["txtCelular"];
    $indicacao = $metodo["txtIndicacao"];
    $estadocivil = $metodo["cxEstadoCivil"];
    $endereco = $metodo["txtEndereco"];
    $bairro = $metodo["txtBairro"];
    $numero = $metodo["txtNumero"];
    $cidade = $metodo["txtCidade"];
    $estado = $metodo["txtEstado"];
    $complemento = $metodo["txtComplemento"];
    $cep = $metodo["txtCEP"];
    
    //SETANDO OS VALORES NO OBJETO
    $paciente = new Paciente();
    $paciente->setValor("NOME", $nome);
    $paciente->setValor("NUMEROPRONTUARIO", $numeroProntuario);
    $paciente->setValor("SEXO", $sexo);
    $paciente->setValor("DATANASC", $datanasc);
    $paciente->setValor("CPF", $cpf);
    $paciente->setValor("RG", $rg);
    $paciente->setValor("EMAIL", $email);
    $paciente->setValor("PROFISSAO", $profissao);
    $paciente->setValor("TIPOATENDIMENTO", $tipoAtendimento);
    $paciente->setValor("ACOMPANHANTE", $acompanhante);
    $paciente->setValor("TELEFONE", $telefone);
    $paciente->setValor("CELULAR", $celular);
    $paciente->setValor("INDICACAO", $indicacao);
    $paciente->setValor("ESTADOCIVIL", $estadocivil);
    $paciente->setValor("ENDERECO", $endereco);
    $paciente->setValor("BAIRRO", $bairro);
    $paciente->setValor("NUMERO", $numero);
    $paciente->setValor("CIDADE", $cidade);
    $paciente->setValor("ESTADO", $estado);
    $paciente->setValor("COMPLEMENTO", $complemento);
    $paciente->setValor("CEP", $cep);


    
if($nome == "" OR $numeroProntuario =="" OR $sexo == "null" OR $datanasc == "" OR $cpf == "" OR $rg == "" OR $tipoAtendimento == "" OR $celular == "" OR $estadocivil == "null" OR $endereco == "" OR $bairro == "" OR $numero == "" OR $cidade == "" OR $estado == "" OR $cep == ""){

echo  "<script>alert('Você esqueceu de preencher algum campo obrigatório !');</script>";
} else if ($paciente->inserir($paciente)){
echo  "<script>alert('Paciente cadastrado com sucesso!!');window.location = '../Telas/TelaCadastroPaciente.php';</script>";
   
}



