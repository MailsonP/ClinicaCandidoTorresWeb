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
    <link rel="stylesheet" type="text/css" href="../css/tabela_paciente.css">
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
                    <li><a href="../Paciente/CadastroPacientes.php">Paciente</a></li>
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
            <th class="column5">DataNasc</th>
            <th class="column6">CPF</th>
            <th class="column7">RG</th>
            <th class="column8">E-mail</th>
            <th class="column9">Profissão</th>
            <th class="column10">TipoAtendimento</th>
            <th class="column11">Acompanhante</th>
            <th class="column12">Estrangeiro</th>
            <th class="column13">Telefone</th>
            <th class="column14">Celular</th>
            <th class="column15">Indicaçao</th>
            <th class="column16">EstadoCivil</th>
            <th class="column17">Endereço</th>
            <th class="column18">Bairro</th>
            <th class="column19">Numero</th>
            <th class="column20">Cidade</th>
            <th class="column21">Estado</th>
            <th class="column22">Complemento</th>
            <th class="column23">CEP</th>
          </tr>
        </thead>
        <tbody>
            <?php while ($dado = $paciente->retornaDados("object")){ ?>
          <tr class="tabela">
            <td><?php echo $dado->IDPACIENTE ?></td>
            <td><?php echo $dado->NOME ?></td>
            <td><?php echo $dado->NUMEROPRONTUARIO ?></td>
            <td><?php echo $dado->SEXO ?></td>
            <td><?php echo $dado->DATANASC ?></td>
            <td><?php echo $dado->CPF ?></td>
            <td><?php echo $dado->RG ?></td>
            <td><?php echo $dado->EMAIL ?></td>
            <td><?php echo $dado->PROFISSAO ?></td>
            <td><?php echo $dado->TIPOATENDIMENTO ?></td>
            <td><?php echo $dado->ACOMPANHANTE ?></td>
            <td><?php echo $dado->ESTRANGEIRO ?></td>
            <td><?php echo $dado->TELEFONE ?></td>
            <td><?php echo $dado->CELULAR ?></td>
            <td><?php echo $dado->INDICACAO ?></td>
            <td><?php echo $dado->ESTADOCIVIL ?></td>
            <td><?php echo $dado->ENDERECO ?></td>
            <td><?php echo $dado->BAIRRO ?></td>
            <td><?php echo $dado->NUMERO ?></td>
            <td><?php echo $dado->CIDADE ?></td>
            <td><?php echo $dado->ESTADO ?></td>
            <td><?php echo $dado->COMPLEMENTO ?></td>
            <td><?php echo $dado->CEP?></td>
            <td class="column5"><a href="formAtualizaPaciente.php?Idpaciente=<?php echo $dado->IDPACIENTE;?>">Editar</a> 
                <a href="" id="separador">|</a>
                <a>Excluir</a>
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
