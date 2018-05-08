<?php
session_start();
include_once '../Login/ProtectPaginas.php';
protect();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Paciente</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/CadastraAtualiza.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <script src="../js/ValidaCpf.js"></script>

  </head>
  <body>
    <header id="topo">
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>
    <nav class="menu">
        <ul>
            <li><a href="../Telas/Home.php">Inicio</a></li>
            <li><a href="#">Cadastro</a>
                <ul>
                    <li><a href="../Telas/TelaCadastroUsuario.php">Usuário</a></li>
                    <li><a href="../Telas/TelaCadastroMedico.php">Médico</a></li>
                    <li><a href="../Telas/TelaCadastroPaciente.php">Paciente</a></li>
                </ul>
            </li>
            <li><a href="../Login/Sair.php">Sair</a></li>
        </ul>
    </nav>
    </header>
    
    <div class="container mid">


        <div class="row">
            <div class="col-sm-12">
                <h2 class="titulo-h2">Cadastro Paciente</h2>
            <form action="../Paciente/RegistraPaciente.php" method="POST" onsubmit="return VerificaCPF();">

            <div class="row">
                    <div class="form-group col-md-6" >
              <label for="nome">Nome:</label>
              <input type="text" class="form-control up" name="txtNome" id="nome" required>
                    </div>
          
            <div class="form-group col-md-3">
              <label for="dataNasc">Data de Nasc:</label>
                <input type="text" class="form-control" name="txtDataNasc" id="dataNasc" required>
            </div>

                    <div class="form-group col-md-3">
                        <label>Número do Prontuário:</label>
                <input type="text" class="form-control" name="txtNum" id="numPront" required>
                    </div>
            </div>

            <div class="row">
              <div class="form-group col-md-3">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" name="txtCPF" id="cpf" onblur="return VerificaCPF();" required>
                <span id="error" style="color: red;font-style: italic;"></span>
              </div>

              <div class="form-group col-md-3">
                <label>RG:</label>
                <input type="text" class="form-control" name="txtRG" id="rg"  required>
              </div>

              <div class="form-group col-md-4">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="txtEmail" id="email" required>
              </div>

              <div class="form-group col-md-2">
                <label for="sexo">Sexo:</label>
                <select class="form-control" name="cxSexo" id="sexo" required>
                                <option value="">-----</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                </select>
              </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4">
                  <label for="atendimento">Tipo Atendimento:</label>
                  <input type="text" class="form-control up" name="txtAtendimento" id="atendimento" required>
                </div>

                <div class="form-group col-md-3">
                <label for="acomp">Acompanhante:</label>
                <input type="text" class="form-control up" name="txtAcompanhante" id="acomp" >
                </div>

                <div class="form-group col-md-3">
                  <label for="indica">Indicação:</label>
                <input type="text" class="form-control up" name="txtIndicacao" id="indica"> 
                </div>
          
                <div class="form-group col-md-2">
                  <label for="eCivil">Estado Civil:</label>
                  <select class="form-control" name="cxEstadoCivil" id="eCivil" required>
                                <option value="">-----</option>
                                <option value="Casado">Casado</option>
                                <option value="Solteiro">Solteiro</option>
                                <option value="Divorciado">Divorciado</option>
                                <option value="Viuvo">Viúvo</option>
                                <option value="Separado">Separado</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-5">
                  <label for="profissao">Profissão:</label>
                  <input type="text" class="form-control up" name="txtProfissao" id="profissao" required>
                </div>

                <div class="form-group col-md-4">
                  <label for="cidade">Cidade:</label>
                  <input type="text" class="form-control up" name="txtCidade" id="cidade" required>
                </div>

                <div class="form-group col-md-3">
                  <label for="estado">Estado:</label>
                  <input type="text" class="form-control up" name="txtEstado" id="estado" required>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4">
                  <label for="telefone">Telefone:</label>
                  <input type="text" class="form-control" name="txtTelefone" id="telefone">
                </div>

                <div class="form-group col-md-4">
                  <label for="celular">Celular:</label>
                  <input type="text" class="form-control" name="txtCelular" id="celular" required>
                </div>

                <div class="form-group col-md-4">
                  <label for="CEP">CEP:</label>
                  <input type="text" class="form-control" name="txtCEP" id="CEP" required>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-3">
                  <label for="bairro">Bairro:</label>
                  <input type="text" class="form-control up" name="txtBairro" id="bairro" required>
                </div>

                <div class="form-group col-md-3">
                  <label for="endereco">Endereço:</label>
                  <input type="text" class="form-control up" name="txtEndereco" id="endereco" required>
                </div>

                <div class="form-group col-md-3">
                  <label for="numero">Numero:</label>
                  <input type="text" class="form-control" name="txtNumero" id="numero" required>  
                </div>

                <div class="form-group col-md-3">
                  <label for="complemento">Complemento:</label>
                  <input type="text" class="form-control up" name="txtComplemento" id="complemento">
                </div>
              </div>

          <button type="submit" value="Cadastrar" name="btnSalvar" class="bt-salvar">Salvar</button>
          <a href="../Paciente/TelaPacienteTable.php"><button type="button" class="bt-buscar">Buscar</button></a>


                </form>

            </div>

        </div>

    </div> 
    <footer>
    <h1>Copyright &copy 2018 - Fábrica de Software</h1>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/jquery.mask.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $('#dataNasc').mask('00/00/0000');
      $('#cpf').mask('000.000.000-00');
      $('#rg').mask('0000000000-0');
      $('#celular').mask('(00) 00000-0000');
      $('#telefone').mask('(00) 0000-0000');
      $('#CEP').mask('00000-000');
    });
    </script>
  </body>
</html>