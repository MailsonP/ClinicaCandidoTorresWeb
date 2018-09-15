<?php

session_start();
require_once '../Paciente/Paciente.php';
include_once '../Paciente/ValidarProntuario.php';
/**
 * Description of Paciente
 *
 * @author Felipe
 */
$metodo = $_POST;

$valida = new ValidarProntuario();

//PEGANDO VALORES DOS CAMPOS
if (isset($metodo["txtNome"])) {
    $nome = addslashes($metodo["txtNome"]);
    $numeroProntuario = $metodo["txtNum"];
    $numeroProntuario = preg_replace('/[^[:alnum:]]/','', $numeroProntuario);
    $sexo = addslashes($metodo["cxSexo"]);
    $datanasc = addslashes($metodo["txtDataNasc"]);
    $cpf = addslashes($metodo["txtCPF"]);
    $rg = addslashes($metodo["txtRG"]);
    $email = $metodo["txtEmail"];
    $email = preg_replace('/[^[:alnum:]@.]/','', $email);
    $profissao = addslashes($metodo["txtProfissao"]);
    $telefone = addslashes($metodo["txtTelefone"]);
    $celular = addslashes($metodo["txtCelular"]);
    $indicacao = addslashes($metodo["txtIndicacao"]);
    $estadocivil = addslashes($metodo["cxEstadoCivil"]);
    $endereco = addslashes($metodo["txtEndereco"]);
    $bairro = addslashes($metodo["txtBairro"]);
    $numero = addslashes($metodo["txtNumero"]);
    $cidade = addslashes($metodo["txtCidade"]);
    $estado = addslashes($metodo["txtEstado"]);
    $complemento = addslashes($metodo["txtComplemento"]);
    $cep = addslashes($metodo["txtCEP"]);

    //Chamando o metodo de validar Prontuario  
    $resultado = $valida->validaProntuario($numeroProntuario);

    //Recuperando o valor do Prontuario.
    $dados_prontuario = mysqli_fetch_array($resultado);

    if (!isset($dados_prontuario['NUMEROPRONTUARIO'])) {

        //SETANDO OS VALORES NO OBJETO
        $paciente = new Paciente();

        $paciente->setValor("NOME", $nome);
        $paciente->setValor("NUMEROPRONTUARIO", $numeroProntuario);
        $paciente->setValor("SEXO", $sexo);
        $paciente->setValor("DATANASC", date("Y-d-m", strtotime($datanasc)));
        $paciente->setValor("CPF", $cpf);
        $paciente->setValor("RG", $rg);
        $paciente->setValor("EMAIL", $email);
        $paciente->setValor("PROFISSAO", $profissao);
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

        if ($paciente->inserir($paciente)) {
            echo "<script>alert('Paciente cadastrado com sucesso!!');window.location = '../Telas/TelaCadastroPaciente.php';</script>";
        } else {
            echo "<script>alert('Você esqueceu de preencher algum campo obrigatório :/');window.history.back(1);</script>";
        }
    } else {
        echo "<script>alert('O numero de prontuario ja existe.!');window.location = '../Telas/TelaCadastroPaciente.php';</script>";
    }
}
?>