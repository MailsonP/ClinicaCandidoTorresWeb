<?php
/* 
 * Felipe
 */
//IMPORTAÇÃO DO BANCO E DA CLASSE PACIENTE
require_once ('../BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc');
require_once  ('../Paciente/Paciente.php');

//INSTANCIA DA CLASSE PACIENTE
$paciente = new Paciente();

//SETANDO VALORES NA CLASSE PACIENTE
$paciente->setNumeroProntuarioPaciente(filter_input(INPUT_POST, 'txtNum'));
$paciente->setNomePaciente(filter_input(INPUT_POST, 'txtNome'));
$paciente->setSexoPaciente(filter_input(INPUT_POST, 'txtSexo'));
$paciente->setDataNascPaciente(filter_input(INPUT_POST, 'txtDataNasc'));
$paciente->setcCpfPaciente(filter_input(INPUT_POST, 'txtCPF'));
$paciente->setRgPaciente(filter_input(INPUT_POST, 'txtRG'));
$paciente->setEmailPaciente(filter_input(INPUT_POST, 'txtEmail'));
$paciente->setProfissoPaciente(filter_input(INPUT_POST, 'txtProfissao'));
$paciente->setTipoDeAtendimento(filter_input(INPUT_POST, 'txtAtendimento'));
$paciente->setAcompanhantePaciente(filter_input(INPUT_POST, 'txtAcompanhante'));
$paciente->setEstrangeiroPaciente(filter_input(INPUT_POST, 'txtEstrangeiro'));
$paciente->setTelefonePaciente(filter_input(INPUT_POST, 'txtTelefone'));
$paciente->setCelularPaciente(filter_input(INPUT_POST, 'txtCelular'));
$paciente->setIndicacaoPaciente(filter_input(INPUT_POST, 'txtIndicacao'));
$paciente->setEstadoCivilPaciente(filter_input(INPUT_POST, 'cxEstado'));
$paciente->setEnderecoPaciente(filter_input(INPUT_POST, 'txtEndereco'));
$paciente->setBairroPaciente(filter_input(INPUT_POST, 'txtBairro'));
$paciente->setNumEnderecoPaciente(filter_input(INPUT_POST, 'txtNumero'));
$paciente->setCidadePaciente(filter_input(INPUT_POST, 'txtCidade'));
$paciente->setEstadoPaciente(filter_input(INPUT_POST, 'txtEstado'));
$paciente->setComplementoPaciente(filter_input(INPUT_POST, 'txtComplemento'));
$paciente->setCepPaciente(filter_input(INPUT_POST, 'txtCEP'));

//PEGANDO VALORES DA CLASSE PACIENTE
     $numeroProntuarioPaciente = $paciente->getNumeroProntuarioPaciente();
     $nomePaciente = $paciente->getNomePaciente();
     $sexoPaciente = $paciente->getSexoPaciente();
     $dataNascPaciente = $paciente->getDataNascPaciente();
     $cpfPaciente = $paciente->getCpfPaciente();
     $rgPaciente = $paciente->getRgPaciente();
     $emailPaciente = $paciente->getEmailPaciente();
     $profissoPaciente = $paciente->getProfissaoPaciente();
     $tipoDeAtendimento = $paciente->getTipoDeAtendimento();
     $acompanhantePaciente = $paciente->getAcompanhantePaciente();
     $estrangeiroPaciente = $paciente->getEstrangeiroPaciente();
     $telefonePaciente = $paciente->getTelefonePaciente();
     $celularPaciente = $paciente->getCelularPaciente();
     $indicacaoPaciente = $paciente->getIndicacaoPaciente();
     $estadoCivilPaciente = $paciente->getEstadoCivilPaciente();
     $enderecoPaciente = $paciente->getEnderecoPaciente();
     $bairroPaciente = $paciente->getBairroPaciente();
     $numEnderecoPaciente = $paciente->getNumEnderecoPaciente();
     $cidadePaciente = $paciente->getCidadePaciente();
     $estadoPaciente = $paciente->getEstadoPaciente();
     $complementoPaciente = $paciente->getComplementoPaciente();
     $cepPaciente = $paciente->getCepPaciente();

     //CONDIÇÃO DE CLIQUE DO BOTAO "CADASTRAR" PARA INSERCAO NO BANCO 
if($_POST['btnSalvar']){
     $sql = "INSERT INTO paciente(NUMEROPRONTUARIO,NOME,SEXO,DATANASC,CPF,RG,EMAIL,PROFISSAO,TIPOATENDIMENTO,
             ACOMPANHANTE,ESTRANGEIRO,TELEFONE,CELULAR,INDICACAO,ESTADOCIVIL,ENDERECO,BAIRRO,NUMERO,CIDADE,ESTADO,COMPLEMENTO,CEP)
             VALUES ('$numeroProntuarioPaciente'
               ,'$nomePaciente','$sexoPaciente','$dataNascPaciente','$cpfPaciente','$rgPaciente'
               ,'$emailPaciente','$profissoPaciente','$tipoDeAtendimento','$acompanhantePaciente'
               ,'$estrangeiroPaciente','$telefonePaciente','$celularPaciente','$indicacaoPaciente'
               ,'$estadoCivilPaciente','$enderecoPaciente','$bairroPaciente','$numEnderecoPaciente'
               ,'$cidadePaciente','$estadoPaciente','$complementoPaciente','$cepPaciente')";
        
        $conexao = mysqli_connect("localhost", "root", "", "clinica_candido_torres_database");
        
        $rsult = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        if($rsult==true){
            echo '<script>alert("Cliente Adicionado com Sucesso!!");</script>';    
        }else{
            echo '<script>alert("Erro ao adicionar Paciente!!!");</script>'; 
        }
        mysqli_close($conexao);
}else{
    echo 'Nao clicou no botao...';
}
       
  


 
