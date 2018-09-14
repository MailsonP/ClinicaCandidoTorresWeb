<?php
session_start();
include_once '../Login/ProtectPaginas.php';
include_once '../util/daoGenerico.php';
include_once '../Paciente/Paciente.php';
include_once '../Atendimento/Atendimento.php';
include_once '../Medico/Medico.php';

protect();


$medic = new Medico();
$tipoAten = new Atendimento();
$paciente = new Paciente();

if (isset($_SESSION["tipoUsuario"])) {
    $tipo_user = $_SESSION["tipoUsuario"];
}

   //PARA LISTAR NOS COMBOBOX
   $tipoAten->retornaTudo($tipoAten);
   $medic->retornaTudo($medic);

   //PARA LISTAR JANELA MODAL
   $paciente->retornaTudo($paciente);


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro Agenda</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
        <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/CadastraAtualiza.css">
       
        <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
        <script src="../js/jquery-3.2.1.js"></script>
        <script src="../js/login.js"></script>
        <script type="text/javascript">

            $(document).ready( function () {

                var tipo_user = "<?php echo $tipo_user ?>";
                var id = "<?php echo $id ?>";
                

                if (tipo_user != "Administrador") {
                    document.getElementById("opcaoUser").style.display = "none";
                }
                
            });                 
    
        </script>

    </head>
    <body>
    <header id="topo">
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>
    <div id="right"><img src="../img/cct.png"></div>
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
                    <h2 class="titulo-h2">Cadastro Agenda</h2>

            <!-- FORMULARO DE CADASTRO AGENDA -->    
                <form id="form" action="../Agenda/RegistraAgenda.php" method="POST">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="paciente">Paciente:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>  
                           <input type="text" class="form-control up" id="paciente" name="paciente" disabled="true" required>
                           <input type="hidden" id="CampoId" name="Idpaciente">
                           </div>

                            <div class="form-group col-sm-3">
                                <label for="DataAtendId">Data de Atendimento:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <input type="text" class="form-control" name="datadeatendimento" id="DataAtendId" required>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="IdMedic" >Medico:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <select class="form-control" name="medico" id="IdMedic" style="text-transform: uppercase;">  
                                <?php while ($dadoMedic = $medic->retornaDados("object")) { ?>  
                                    <option value="<?php echo $dadoMedic->IDMEDICO; ?>"><?php echo $dadoMedic->NOME; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="IdTipoAtend">Tipo Atendimento:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <select class="form-control" name="TipoAtendimento" id="IdTipoAtend" >
                                    <?php while ($dadoAtendimento = $tipoAten->retornaDados("object")) { ?>
                                    <option value="<?php echo $dadoAtendimento->IDATENDIMENTO; ?>"><?php echo $dadoAtendimento->TIPOATENDIMENTO; ?></option>
                                    <?php } ?>
                                </select>
                            </div>


                         <div class="form-group col-sm-7">
                                <label for="obsId">Observação:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <input type="text" class="form-control" name="observacao" id="obsId" required>
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="form-group col-sm-4">
                                <label for="valorId">Valor:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <input type="text" class="form-control up" name="valor" id="valorId" required>

                            </div>

                            <div class="form-group col-sm-4">
                                <label for="pagarId">Pagamento:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <input type="text" class="form-control up" name="pagamento" id="pagarId" required>
                            </div>

                        </div>

                        <button type="submit" class="bt-salvar">Salvar</button>
                        <a href="../Agenda/TelaAgendaTable.php"><button type="button" class="bt-buscar">Buscar</button></a>
                        <button type="button" class="bt-salvar" data-toggle="modal" data-target="#exampleModal">Pesquisar</button></a>

                        <div class="row">
       
                </form>
            <!-- FIM DO FORMULARO -->  

            <!-- MODAL DE ESCOLHA DE PACIENTE -->
                 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECIONE UM ITEM..</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="conteudo">
                            <table>
                                  <thead>
                                          <tr class="titulo-table">
                                            <th class="column1">PACIENTES CADASTRADOS</th>
                                            <th class="column2"></th> 
                                          </tr>
                                  </thead> 
                                  <tbody>                                
                                      <?php while ($dadosPac = $paciente->retornaDados("object")) { ?> 
                                      <tr class="linhas_tabela">
                                         <td colspan="2"><?php echo $dadosPac->NOME ?></td>
                                         <td><a><button onclick="Clique('<?php echo $dadosPac->NOME ?>','<?php echo $dadosPac->IDPACIENTE ?>');" type="button" id="btn_add" data-dismiss="modal"><img src="../img/add3.png"></button></a></td>
                                      </tr>
                                      <?php } ?>
                                  </tbody>            
                            </table>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <h1 style="font-family: 'Raleway', sans-serif !important;"><strong>Copyright &copy 2018 - Fábrica de Software</strong></h1>
        </footer>
        <script type="">

              //FUNÇÃO DE CLIQUE DO BOTÃO MODAL PACIENTE        
                 function Clique($Nome,$id){
                    document.getElementById("paciente").value = $Nome;
                    document.getElementById("CampoId").value = $id; 
                 }  
                      
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/modal.css">
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.2.1.js"></script>
        <script src="../js/jquery.mask.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#DataAtendId').mask('00/00/0000');
            });
        </script>
    </body>
</html>

