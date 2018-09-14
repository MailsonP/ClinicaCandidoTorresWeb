<?php
session_start();
include_once '../Login/ProtectPaginas.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Paciente</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/CadastraAtualiza.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <script src="../js/ValidaCpf.js"></script>
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/login.js"></script>
    
    <script type="text/javascript">
            
            $(document).ready(function(){
              
              var tipo_user = "<?php echo $tipo_user ?>";
              
              if(tipo_user != "Administrador"){
                   document.getElementById("opcaoUser").style.display = "none";
              }
                               
            });
        
        </script>

  </head>
  <body>

    <?php include '../util/nav.php' ?>
    
    <div class="container mid">


        <div class="row">
            <div class="col-sm-12">
                <h2 class="titulo-h2">Cadastro Paciente</h2>
            <form action="../Paciente/RegistraPaciente.php" method="POST" onsubmit="return VerificaCPF();">

            <div class="row">
                    <div class="form-group col-md-6" >
              <label for="nome">Nome:</label>
              <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
              <input type="text" class="form-control up" name="txtNome" id="nome" required>
                    </div>
          
            <div class="form-group col-md-3">
              <label for="dataNasc">Data de Nasc:</label>
              <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <input type="text" class="form-control" name="txtDataNasc" id="dataNasc" required>
            </div>

                    <div class="form-group col-md-3">
                        <label>Número do Prontuário:</label>
                        <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <input type="text" class="form-control" name="txtNum" id="numPront" >
                    </div>
            </div>

            <div class="row">
              <div class="form-group col-md-3">
                <label for="cpf">CPF:</label>
                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <input type="text" class="form-control" name="txtCPF" id="cpf" onblur="return VerificaCPF();" required>
                <span id="error" style="color: red;font-style: italic;"></span>
              </div>

              <div class="form-group col-md-3">
                <label>RG:</label>
                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <input type="text" class="form-control" name="txtRG" id="rg"  >
              </div>

              <div class="form-group col-md-4">
                <label for="email">Email:</label>
                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <input type="text" class="form-control" name="txtEmail" id="email" >
              </div>

              <div class="form-group col-md-2">
                <label for="sexo">Sexo:</label>
                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <select class="form-control" name="cxSexo" id="sexo" >
                                <option value="">-----</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                </select>
              </div>
              
              </div>

              <div class="row">


                <div class="form-group col-md-3">
                  <label for="indica">Indicação:</label>
                <input type="text" class="form-control up" name="txtIndicacao" id="indica"> 
                </div>
          
                <div class="form-group col-md-2">
                  <label for="eCivil">Estado Civil:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <select class="form-control" name="cxEstadoCivil" id="eCivil" >
                                <option value="">-----</option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Solteiro(a)">Solteiro(a)</option>
                                <option value="Divorciado(a)">Divorciado(a)</option>
                                <option value="Viúvo(a)">Viúvo(a)</option>
                                <option value="Separado(a)">Separado(a)</option>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="profissao">Profissão:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control up" name="txtProfissao" id="profissao" >
                </div>

                <div class="form-group col-md-3">
                  <label for="cidade">Cidade:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control up" name="txtCidade" id="cidade" >
                </div>
                
              </div>

              <div class="row">

                <div class="form-group col-md-3">
                  <label for="estado">Estado:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control up" name="txtEstado" id="estado" >
                </div>


                <div class="form-group col-md-3">
                  <label for="telefone">Telefone:</label>
                  <input type="text" class="form-control" name="txtTelefone" id="telefone">
                </div>

                <div class="form-group col-md-3">
                  <label for="celular">Celular:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control" name="txtCelular" id="celular" >
                </div>

                <div class="form-group col-md-3">
                  <label for="CEP">CEP:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control" name="txtCEP" id="CEP" >
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-3">
                  <label for="bairro">Bairro:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control up" name="txtBairro" id="bairro" >
                </div>

                <div class="form-group col-md-3">
                  <label for="endereco">Endereço:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control up" name="txtEndereco" id="endereco" >
                </div>

                <div class="form-group col-md-3">
                  <label for="numero">Numero:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control" name="txtNumero" id="numero" >  
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
      <h1 style="font-family: 'Raleway', sans-serif !important;"><strong>Copyright &copy 2018 - Fábrica de Software</strong></h1>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/jquery.mask.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $('#dataNasc').mask('00/00/0000');
      $('#cpf').mask('000.000.000-00');
      $('#numero').mask('#########');
      $('#celular').mask('(00) 00000-0000');
      $('#telefone').mask('(00) 0000-0000');
      $('#CEP').mask('00000-000');
    });
    </script>
  </body>
</html>