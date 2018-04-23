<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Pacientes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="PacienteDAO.php" method="POST">
            <table id="tabela">
                <tr><td>Nome:</td><td><input type="text" name="txtNome"></td><td>NumeroProntuario:</td><td><input type="text" name="txtNum"></td></tr>
                <tr><td>Sexo:</td><td><input type="text" name="txtsexo"></td><td>DataNasc:</td><td><input type="text" name="txtDataNasc"></td></tr>
                <tr><td>CPF:</td><td><input type="text" name="txtCPF"></td><td>RG:</td><td><input type="text" name="txtRG"></td></tr>
                <tr><td>Email:</td><td><input type="text" name="txtEmail"></td><td>Profissao:</td><td><input type="text" name="txtProfissao"></td></tr>
                <tr><td>Tipo Atendimento:</td><td><input type="text" name="txtAtendimento"></td><td>Acompanhante:</td><td><input type="text" name="txtAcompanhante"></td></tr>
                <tr><td>Estrangeiro:</td><td><input type="text" name="txtEstrangeiro"></td><td>Telefone:</td><td><input type="text" name="txtTelefone"></td></tr>
                <tr><td>Celular:</td><td><input type="text" name="txtCelular"></td><td>Indicação:</td><td><input type="text" name="txtIndicacao"></td></tr>   
                <tr><td>Estado Civil:</td><td><select name="cxEstado">
                            <option value="null">-----</option>
                            <option value="Casado">Casado</option>
                            <option value="Solteiro">Solteiro</option>
                        </select></td></tr>
                <tr><td>Endereço:</td><td><input type="text" name="txtEndereco"></td><td>Bairro:</td><td><input type="text" name="txtBairro"></td></tr>
                <tr><td>Numero:</td><td><input type="text" name="txtNumero"></td><td>Cidade:</td><td><input type="text" name="txtCidade"></td></tr>
                <tr><td>Estado:</td><td><input type="text" name="txtEstado"></td><td>Complemento:</td><td><input type="text" name="txtComplemento"></td></tr>
                <tr><td>CEP:</td><td><input type="text" name="txtCEP"></td><td></td><td><button type="submit" value="Cadastrar" name="btnSalvar">Cadastrar</button></td></tr>
            </table>
        </form>

    </body>
</html>
