<?php
session_start();
require_once '../Atendimento/Atendimento.php';

include_once '../Login/ProtectPaginas.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
}


$atendimento = new Atendimento();
$atendimento->retornaTudo($atendimento);

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
    <title>Pesquisar Profissional</title>
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
    <body ondragstart="return false;">
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

<div class="centro">
    <div class="conteudo">
      <table>
        <thead>
          <tr class="titulo-table">
            <th class="column1">Id</th>
            <th class="column2">Nome</th>
            <th class="column3">Ação</th>
     
          </tr>
        </thead>
        <tbody>
             <?php while ($dado = $atendimento -> retornaDados("object")){ ?>
        <tr class="tabela">
            <td> <?php echo $dado->IDATENDIMENTO ?> </td>
            <td class="up"> <?php echo $dado->TIPOATENDIMENTO ?> </td>
            <td><a href="../Telas/TelaAtualizarAtendimento.php?atendimento=<?php echo $dado->IDATENDIMENTO?>">Editar</a> 
                <a href="" id="separador">|</a>
                <a href="javascript: if(confirm('Tem certeza que quer deletar o usuário <?php echo $dado->IDATENDIMENTO; ?> ?')) 
                    location.href='RemoverAtendimento.php?atendimento=<?php echo $dado->IDATENDIMENTO  ?>';">Excluir</a>
            </td>
        </tr>
        </tbody>
            <?php } ?>          
        </table>
  </div>
</div>

    <footer>
        <h1 style="font-family: 'Raleway', sans-serif !important;"><strong>Copyright &copy 2018 - Fábrica de Software</strong></h1>
    </footer>
</html>


        


