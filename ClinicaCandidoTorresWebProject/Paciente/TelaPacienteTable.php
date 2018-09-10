<?php
/**
 * Description of Paciente
 *
 * @author Felipe
 */
session_start();
require_once '../Paciente/Paciente.php';

include_once '../Login/ProtectPaginas.php';
protect();

if (isset($_SESSION["tipoUsuario"])) {
    $tipo_user = $_SESSION["tipoUsuario"];
}

$paciente = new Paciente();
$paciente->retornaTudo($paciente);
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <link rel="stylesheet" type="text/css" href="../css/cadastro.css">
        <link rel="stylesheet" type="text/css" href="../css/tabela.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Pesquisar Paciente</title>
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
    <body ondragstart="return false;">
        <header id="topo">
            <input type="checkbox" id="bt_menu">
            <label for="bt_menu">&#9776;</label>
            <nav class="menu">
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

        <div class="centro">
            <div class="conteudo">
                <table>
                    <thead>
                        <tr class="titulo-table">
                            <th class="column1">Id</th>
                            <th class="column2">Nome</th>
                            <th class="column3">Num Prontuario</th>
                            <th class="column4">Sexo</th>
                            <th class="column5">Ação</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($dado = $paciente->retornaDados("object")) { ?>
                            <tr class="tabela">
                                <td><?php echo $dado->IDPACIENTE ?></td>
                                <td class="up"><?php echo $dado->NOME ?></td>
                                <td class="up"><?php echo $dado->NUMEROPRONTUARIO ?></td>
                                <td class="up"><?php echo $dado->SEXO ?></td>
                                <td class="column6"><a href="../Telas/TelaAtualizarPaciente.php?Idpaciente=<?php echo $dado->IDPACIENTE; ?>">Editar</a> 
                                    <a href="" id="separador">|</a>
                                    <a href="javascript: if(confirm('Tem certeza que quer deletar o usuário <?php echo $dado->NOME; ?> ?')) 
                                       location.href='RemovePaciente.php?Idpaciente=<?php echo $dado->IDPACIENTE; ?>';">Excluir</a>
                                </td>
                            </tr> 
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>

        <footer>
            <h1>Copyright &copy 2018 - Fábrica de Software</h1>
        </footer>
    </body>
</html>
