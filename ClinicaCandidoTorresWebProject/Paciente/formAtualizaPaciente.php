<?php
/**
 * Description of Paciente
 *
 * @author Felipe
 */
require_once '../util/daoGenerico.php';
require_once './Paciente.php';

$paciente = new Paciente();

//RECUPERANDO ID PASSADO PELA URL
$Metodo = $_GET;
if(isset($Metodo["Idpaciente"])){
    $id = $Metodo["Idpaciente"];
    
$paciente->valorpk=$id;
$paciente->pesquisarID($paciente);
}

while ($dado = $paciente->retornaDados("object")) { 

?>
<html lang="pt-br">
    <head>
        <title>Atualizar Pacientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="Cadastro" style="text-align:center">
            
        <fieldset>
            <legend>Atualização de Paciente</legend>   
            <form action="" method="POST">
            <table>
                <tr><td>Nome:</td><td><input type="text" name="txtNome" value="<?php echo $dado->NOME?>"></td><td>NumeroProntuario:</td><td><input type="text" name="txtNum" value="<?php echo $dado->NUMEROPRONTUARIO ?>"></td></tr>
                <tr><td>Sexo:</td><td><select name="cxSexo">
                                <option value="null">-----</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                     </select>
                </td><td>Estado Civil:</td><td><select name="cxEstadoCivil">
                                <option value="null">-----</option>
                                <option value="Casado">Casado</option>
                                <option value="Solteiro">Solteiro</option>
                                </select></td></tr>
                <tr><td>DataNasc:</td><td><input type="text" name="txtDataNasc" value="<?php echo $dado->DATANASC ?>"></td></tr>
                <tr><td>CPF:</td><td><input type="text" name="txtCPF" value="<?php echo $dado->CPF ?>"></td><td>RG:</td><td><input type="text" name="txtRG" value="<?php echo $dado->RG ?>"></td></tr>
                <tr><td>Email:</td><td><input type="text" name="txtEmail" value="<?php echo $dado->EMAIL ?>"></td><td>Profissao:</td><td><input type="text" name="txtProfissao" value="<?php echo $dado->PROFISSAO ?>"></td></tr>
                <tr><td>Tipo Atendimento:</td><td><input type="text" name="txtAtendimento" value="<?php echo $dado->TIPOATENDIMENTO ?>"></td><td>Acompanhante:</td><td><input type="text" name="txtAcompanhante" value="<?php echo $dado->ACOMPANHANTE ?>"></td></tr>
                <tr><td>Estrangeiro:</td><td><input type="text" name="txtEstrangeiro" value="<?php echo $dado->ESTRANGEIRO ?>"></td><td>Telefone:</td><td><input type="text" name="txtTelefone" value="<?php echo $dado->TELEFONE ?>"></td></tr>
                <tr><td>Celular:</td><td><input type="text" name="txtCelular" value="<?php echo $dado->CELULAR ?>"></td><td>Indicação:</td><td><input type="text" name="txtIndicacao" value="<?php echo $dado->INDICACAO ?>"></td></tr>   
    
                <tr><td>Endereço:</td><td><input type="text" name="txtEndereco" value="<?php echo $dado->ENDERECO ?>"></td><td>Bairro:</td><td><input type="text" name="txtBairro" value="<?php echo $dado->BAIRRO ?>"></td></tr>
                <tr><td>Numero:</td><td><input type="text" name="txtNumero" value="<?php echo $dado->NUMERO ?>"></td><td>Cidade:</td><td><input type="text" name="txtCidade" value="<?php echo $dado->CIDADE ?>"></td></tr>
                <tr><td>Estado:</td><td><input type="text" name="txtEstado" value="<?php echo $dado->ESTADO ?>"></td><td>Complemento:</td><td><input type="text" name="txtComplemento" value="<?php echo $dado->COMPLEMENTO ?>"></td></tr>
                <tr><td>CEP:</td><td><input type="text" name="txtCEP" value="<?php echo $dado->CEP ?>"></td><td></td><td><button type="submit" value="Atualizar" name="btnAtualizar">Atualizar</button></td></tr>
            </table>
        </form>
        </fieldset>
      </div>
    </body>
</html>
<?php } ?>

<?php
$metodo = $_POST;

//PEGANDO VALORES DOS CAMPOS PARA ATUALIZAR
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
    $estrangeiro = $metodo["txtEstrangeiro"];
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

    //SETANDO VALORES PARA ATUALIZAR
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
    $paciente->setValor("ESTRANGEIRO", $estrangeiro);
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

    $paciente->valorpk = $id;

if ($paciente->atualizar($paciente)){
    echo  "<script>alert('Paciente atualizado com sucesso!');window.location = './TelaPacienteTable.php';</script>";
}else{
    echo 'Houve um erro ao tentar atualizar os dados no banco';
}

}

?>