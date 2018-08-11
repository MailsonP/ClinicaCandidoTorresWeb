<?php
session_start();
require_once '../util/daoGenerico.php';
require_once '../Agenda/Agenda.php';

include_once '../Login/ProtectPaginas.php';
protect();

if (isset($_SESSION["tipoUsuario"])) {
    $tipo_user = $_SESSION["tipoUsuario"];
}


$agenda = new Agenda();

$metodo = $_GET;

if (isset($metodo["agenda"])) {
    $id = $metodo["agenda"];
    $agenda->valorpk = $id;
    $agenda->pesquisarID($agenda);
}
$dado = $agenda->retornaDados("object");
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atualizar Agenda</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
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
                        </ul>
                    </li>
                    <li><a href="../Login/Sair.php">Sair</a></li>
                </ul>
            </nav>
        </header>
        <div class="container mid">


            <div class="row">
                <div class="col-sm-12">
                    <h2 class="titulo-h2">Atualizar Agenda</h2>

                    <form action="../Agenda/AtualizarAgenda.php?agenda=<?php echo $dado->IDAGENDA ?>" method="POST">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="nome">Paciente:</label>
                                <input type="text" class="form-control up" value="<?php echo $dado->PACIENTE ?>" name="paciente" id="paciente" required>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="DataAtendId">Data de Atendimento:</label>
                                <input type="text" class="form-control" value="<?php echo $dado->DATADEATENDIMENTO ?>" name="datadeatendimento" id="DataAtendId" required>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="conselhoId" >Medico:</label>
                                <input type= "text" class="form-control" value="<?php echo $dado->MEDICO ?>" name="medico" id="medicoIdId" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-5">
                                <label for="telefoneId">Tipo de Atendimento:</label>
                                <input type="text" class="form-control" value="<?php echo $dado->TIPOATENDIMENTO ?>" name="tipoatendimento" id="tipoIdId" required>
                            </div>

                            <div class="form-group col-sm-7">
                                <label for="obsId">Obervação:</label>
                                <input type="text" class="form-control" value="<?php echo $dado->OBSERVACAO ?>" name="observacao" id="obsId">
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="form-group col-sm-4">
                                <label for="valorId">Valor:</label>
                                <input type="text" class="form-control up" value="<?php echo $dado->VALOR ?>" name="valor" id="valorId" required>

                            </div>

                            <div class="form-group col-sm-4">
                                <label for="pagarId">Pagamento:</label>
                                <input type="text" class="form-control up" value="<?php echo $dado->PAGAMENTO ?>" name="pagamento" id="pagarIdId" required>
                            </div>

                        </div>

                        <button type="submit" class="bt-salvar">Salvar</button>
                        <a href="../Agenda/TelaAgendaTable.php"><button type="button" class="bt-buscar">Voltar</button></a>
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
                $(document).ready(function () {
                    $('#DataNasc').mask('00/00/0000');
                    $('#telefoneId').mask('(00) 00000-0000');
                });
        </script>
    </body>
</html>
