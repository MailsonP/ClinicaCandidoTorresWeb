<?php
session_start();
include_once '../Medico/Medico.php';
include_once '../Paciente/Paciente.php';
include_once '../Atendimento/Atendimento.php';
require_once '../util/daoGenerico.php';
require_once '../Agenda/Agenda.php';
include_once '../Login/ProtectPaginas.php';

protect();

if (isset($_SESSION["tipoUsuario"])) {
    $tipo_user = $_SESSION["tipoUsuario"];
}

$paci = new Paciente();
$medic = new Medico();
$tipoAten = new Atendimento();
$agenda = new Agenda();

if (isset($_GET["Idagenda"]) &&  $_GET["Idagenda"] != null){

    $id_agenda = $_GET["Idagenda"];
    $id_agenda = preg_replace('/[^[:alnum:]]/','', $id_agenda);
    $agenda->valorpk = $id_agenda;
    $agenda->pesquisarID($agenda);

    $dados_agenda = $agenda->retornaDados("object");

    $paci->valorpk = $dados_agenda->ID_PACIENTE;
    $paci->pesquisarID($paci);

    $dados_paci = $paci->retornaDados("object");

}

   $tipoAten->retornaTudo($tipoAten);
   $medic->retornaTudo($medic);


?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atualizar Agenda</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
        <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/CadastraAtualiza.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
        <script src="../js/jquery-3.2.1.js"></script>
        <script src="../js/login.js"></script>

        <script type="text/javascript">

            $(document).ready(function () {

                var tipo_user = "<?php echo $tipo_user ?>";

                if (tipo_user != "Administrador") {
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
                    <h2 class="titulo-h2">Atualizar Agenda</h2>

                    <form action="../Agenda/AtualizarAgenda.php?IdAgenda=<?php echo $dados_agenda->IDAGENDA ?>" method="POST">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="nome">Paciente:</label>
                                 <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>  
                                <input type="text" class="form-control up" value="<?php echo $dados_paci->NOME ?>" name="paciente" id="paciente"  required>
                                <input type="hidden" id="CampoId" value="<?php echo $dados_agenda->ID_PACIENTE ?>"  name="Idpaciente">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="DataAtendId">Data de Atendimento:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <input type="text" class="form-control" value="<?php echo date("d/m/Y", strtotime($dados_agenda->DATADEATENDIMENTO)); ?>" name="datadeatendimento" id="DataAtendId" required>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="IdMedic" >Medico:</label>
                                 <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <select class="form-control" name="medico" id="IdMedic" >  
                                <?php while ($dadoMedic = $medic->retornaDados("object")) { ?>  
                                    <option value="<?php echo $dadoMedic->IDMEDICO; ?>"><?php echo $dadoMedic->NOME; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-5">
                                <label for="telefoneId">Tipo de Atendimento:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <select class="form-control" name="tipoatendimento" id="IdTipoAtend" >
                                    <?php while ($dadoAtendimento = $tipoAten->retornaDados("object")) { ?>
                                    <option value="<?php echo $dadoAtendimento->IDATENDIMENTO; ?>"><?php echo $dadoAtendimento->TIPOATENDIMENTO; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group col-sm-7">
                                <label for="obsId">Obervação:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <input type="text" class="form-control" value="<?php echo $dados_agenda->OBSERVACAO ?>" name="observacao" id="obsId">
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="form-group col-sm-4">
                                <label for="valorId">Valor:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <input type="text" class="form-control up" value="<?php echo $dados_agenda->VALOR ?>" name="valor" id="valorId" required>

                            </div>

                            <div class="form-group col-sm-4">
                                <label for="pagarId">Pagamento:</label>
                                <span class="obg" style="color: #A12126; font-size: 20px; float: right;">*</span>
                                <input type="text" class="form-control up" value="<?php echo $dados_agenda->PAGAMENTO ?>" name="pagamento" id="pagarIdId" required>
                            </div>

                        </div>

                        <button type="submit" class="bt-salvar">Salvar</button>
                        <a href="../Agenda/TelaAgendaTable.php"><button type="button" class="bt-buscar">Voltar</button></a>
                    </form>

                </div>
            </div>
        </div>

        <?php include '../util/footer.php' ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.2.1.js"></script>
        <script src="../js/jquery.mask.js"></script>
        <script type="text/javascript">
                $(document).ready(function () {
                    $('#DataAtendId').mask('00/00/0000');
                });
        </script>
    </body>
</html>
