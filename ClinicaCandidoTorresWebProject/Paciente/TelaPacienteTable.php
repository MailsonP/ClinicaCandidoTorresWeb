<?php
/**
 * Description of Paciente
 *
 * @author Felipe
 */
require_once '../Paciente/Paciente.php';

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
    <title>Pesquisar Usuário</title>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/login.js"></script>
    <script src="./fixedHeader.js"></script>
    </head>
    <body ondragstart="return false;">
    <header id="topo">
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>
    <nav class="menu">
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="#">Cadastro</a>
                <ul>
                    <li><a href="../TelaCadastroUsuario.php">Usuário</a></li>
                    <li><a href="#">Médico</a></li>
                    <li><a href="../Telas/TelaCadastroPaciente.php">Paciente</a></li>
                    <li><a href="#">Funcionário</a></li>
                    <li><a href="#">Cidade</a></li>
                    <li><a href="#">Especialização</a></li>
                </ul>
            </li>
                <li>
                <a href="#">Consulta</a>
                <ul>
                    <li><a href="../Usuario/TelaUsuarioTable.php">Usuário</a></li>
                    <li><a href="#">Médico</a></li>
                    <li><a href="../Paciente/TelaPacienteTable.php">Paciente</a></li>
                    <li><a href="#">Funcionário</a></li>
                    <li><a href="#">Cidade</a></li>
                    <li><a href="#">Especialização</a></li>
                </ul>
            </li>
            <li><a href="#">Relatório</a></li>
            <li><a href="#">Contato</a></li>
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
            <th class="column3">NumProntuario</th>
            <th class="column4">Sexo</th>
            <th class="column5">TipoAtendimento</th>
            <th class="column6">Opcões</th>
     
          </tr>
        </thead>
        <tbody>
            <?php while ($dado = $paciente->retornaDados("object")){ ?>
          <tr class="tabela">
            <td><?php echo $dado->IDPACIENTE ?></td>
            <td><?php echo $dado->NOME ?></td>
            <td><?php echo $dado->NUMEROPRONTUARIO ?></td>
            <td><?php echo $dado->SEXO ?></td>
            <td><?php echo $dado->TIPOATENDIMENTO ?></td>
            <td class="column5"><a href="formAtualizaPaciente.php?Idpaciente=<?php echo $dado->IDPACIENTE;?>">Editar</a> 
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
</html>
