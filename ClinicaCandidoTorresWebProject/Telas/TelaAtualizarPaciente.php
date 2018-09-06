<?php
/**
 * Description of Paciente
 *
 * @author Felipe
 */
session_start();
require_once '../util/daoGenerico.php';
require_once '../Paciente/Paciente.php';

include_once '../Login/ProtectPaginas.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
}

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
    <header id="topo">
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>
    <nav class="menu" id="menu">
        <ul>
            <li><a href="../Telas/Home.php">Inicio</a></li>
            <li><a href="#">Cadastro</a>
                <ul>
                    <li id="opcaoUser"><a href="../Telas/TelaCadastroUsuario.php">Usuário</a></li>
                    <li><a href="../Telas/TelaCadastroMedico.php">Profissional</a></li>
                    <li><a href="../Telas/TelaCadastroPaciente.php">Paciente</a></li>
                     <li><a href="../Telas/TelaCadastroAgenda.php">Agenda</a></li>
                    <li><a href="../Telas/TelaCadastroAtendimento.php">Atendimento</a></li>
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
            <form action="" method="POST" onsubmit="return VerificaCPF();">

            <div class="row">
                    <div class="form-group col-md-6" >
              <label for="nome">Nome:</label>
              <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
              <input type="text" class="form-control up" name="txtNome" value="<?php echo $dado->NOME?>" id="nome" required>
                    </div>
          
            <div class="form-group col-md-3">
              <label for="dataNasc">Data de Nasc:</label>
              <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <input type="text" class="form-control" name="txtDataNasc" value="<?php echo $dado->DATANASC ?>" id="dataNasc" required>
            </div>

                    <div class="form-group col-md-3">
                        <label>Número do Prontuário:</label>
                        <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <input type="text" class="form-control" name="txtNum" value="<?php echo $dado->NUMEROPRONTUARIO ?>" id="numPront" >
                    </div>
            </div>

            <div class="row">
              <div class="form-group col-md-3">
                <label for="cpf">CPF:</label>
                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <input type="text" class="form-control" name="txtCPF" value="<?php echo $dado->CPF ?>" id="cpf" onblur="return VerificaCPF();" required>
                <span id="error" style="color: red;font-style: italic;"></span>
              </div>

              <div class="form-group col-md-3">
                <label>RG:</label>
                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <input type="text" class="form-control" name="txtRG" value="<?php echo $dado->RG ?>" id="rg"  >
              </div>

              <div class="form-group col-md-4">
                <label for="email">Email:</label>
                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <input type="text" class="form-control" name="txtEmail" value="<?php echo $dado->EMAIL ?>" id="email" >
              </div>

              <div class="form-group col-md-2">
                <label for="sexo">Sexo:</label>
                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                <select class="form-control" name="cxSexo" id="sexo" >
                                <option value="">-----</option>
                                <option value="Masculino" <?php if($dado->SEXO == "Masculino") echo 'selected';  ?>>Masculino</option>
                                <option value="Feminino" <?php if($dado->SEXO == "Feminino") echo 'selected';  ?>>Feminino</option>
                </select>
              </div>
              
              </div>

              <div class="row">


                <div class="form-group col-md-3">
                  <label for="indica">Indicação:</label>
                <input type="text" class="form-control up" name="txtIndicacao" value="<?php echo $dado->INDICACAO ?>" id="indica"> 
                </div>
          
                <div class="form-group col-md-2">
                  <label for="eCivil">Estado Civil:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <select class="form-control" name="cxEstadoCivil" id="eCivil" >
                                <option value="">-----</option>
                                <option value="Casado(a)" <?php if($dado->ESTADOCIVIL == "Casado(a)") echo 'selected';  ?>>Casado(a)</option>
                                <option value="Solteiro(a)" <?php if($dado->ESTADOCIVIL == "Solteiro(a)") echo 'selected';  ?>>Solteiro(a)</option>
                                <option value="Divorciado(a)" <?php if($dado->ESTADOCIVIL == "Divorciado(a)") echo 'selected';  ?>>Divorciado(a)</option>
                                <option value="Viúvo(a)" <?php if($dado->ESTADOCIVIL == "Viúvo(a)") echo 'selected';  ?>>Viúvo(a)</option>
                                <option value="Separado(a)" <?php if($dado->ESTADOCIVIL == "Separado(a)") echo 'selected';  ?>>Separado(a)</option>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="profissao">Profissão:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control up" name="txtProfissao" value="<?php echo $dado->PROFISSAO ?>" id="profissao" >
                </div>

                <div class="form-group col-md-3">
                  <label for="cidade">Cidade:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control up" name="txtCidade" value="<?php echo $dado->CIDADE ?>" id="cidade" >
                </div>
                
              </div>

              <div class="row">

                <div class="form-group col-md-3">
                  <label for="estado">Estado:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control up" name="txtEstado" value="<?php echo $dado->ESTADO ?>" id="estado" >
                </div>


                <div class="form-group col-md-3">
                  <label for="telefone">Telefone:</label>
                  <input type="text" class="form-control" name="txtTelefone" value="<?php echo $dado->TELEFONE ?>" id="telefone">
                </div>

                <div class="form-group col-md-3">
                  <label for="celular">Celular:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control" name="txtCelular" value="<?php echo $dado->CELULAR ?>" id="celular" >
                </div>

                <div class="form-group col-md-3">
                  <label for="CEP">CEP:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control" name="txtCEP" value="<?php echo $dado->CEP ?>" id="CEP" >
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-3">
                  <label for="bairro">Bairro:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control up" name="txtBairro" value="<?php echo $dado->BAIRRO ?>" id="bairro" >
                </div>

                <div class="form-group col-md-3">
                  <label for="endereco">Endereço:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control up" name="txtEndereco" value="<?php echo $dado->ENDERECO ?>" id="endereco" >
                </div>

                <div class="form-group col-md-3">
                  <label for="numero">Numero:</label>
                  <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                  <input type="text" class="form-control" name="txtNumero" value="<?php echo $dado->NUMERO ?>" id="numero" >  
                </div>

                <div class="form-group col-md-3">
                  <label for="complemento">Complemento:</label>
                  <input type="text" class="form-control up" name="txtComplemento" value="<?php echo $dado->COMPLEMENTO ?>" id="complemento">
                </div>
              </div>

                    <button type="submit" value="Atualizar" name="btnAtualizar" class="bt-atualizar">Salvar</button>
                    <a href="../Paciente/TelaPacienteTable.php"><button type="button" class="bt-voltar">Voltar</button></a>


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
      $('#numero').mask('#########');
      $('#celular').mask('(00) 00000-0000');
      $('#telefone').mask('(00) 0000-0000');
      $('#CEP').mask('00000-000');
    });
    </script>
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
    $paciente->setValor("DATANASC", date("Y-d-m",strtotime($datanasc)));
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

    $paciente->valorpk = $id;

if ($paciente->atualizar($paciente)){
    echo  "<script>alert('Paciente atualizado com sucesso!');window.location = '../Paciente/TelaPacienteTable.php';</script>";
}else{
    echo "<script>alert('Não foi modificado nada ainda.');</script>";
}

}

?>