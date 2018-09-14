<?php
session_start();
require_once '../Agenda/Agenda.php';

include_once '../Login/ProtectPaginas.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
}


$agenda = new Agenda();
$dados = $agenda->ListarAgendas();

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

  <?php include '../util/nav.php' ?>

<div class="centro">
    <div class="conteudo">
      <table>
        <thead>
          <tr class="titulo-table">
           <th class="column1">ID</th>
            <th class="column2">PACIENTE</th>
            <th class="column3">DATA ATEND</th>
            <th class="column4">MEDICO</th>
            <th class="column5">TIPO ATEND</th>
            <th class="column6">Ação</th>  
          </tr>
        </thead>
        <tbody>
             <?php while ($dado = mysqli_fetch_assoc($dados)){ ?>
        <tr class="tabela">
            <td> <?php echo $dado['ID'] ?> </td>
            <td class="up"> <?php echo $dado['NOMEDOPACIENTE'] ?></td>
            <td class="up"> <?php echo date("d/m/Y", strtotime($dado['DATADEATENDIMENTO'])); ?> </td>        
            <td class="up"> <?php echo $dado['NOMEDOMEDICO'] ?></td>
            <td> <?php echo $dado['TIPODEATENDIMENTO'] ?>  </td>
            <td><a href="../Telas/TelaAtualizarAgenda.php?Idagenda=<?php echo $dado['ID'] ?>">Editar</a> 
                <a href="" id="separador">|</a>
                <a href="javascript: if(confirm('Tem certeza que deseja deletar o agendamento de <?php echo $dado['NOMEDOPACIENTE'] ?> ?')) 
                    location.href='RemoverAgenda.php?agenda=<?php echo $dado['ID']?>';">Excluir</a>
            </td>
        </tr>
        </tbody>
            <?php } ?>          
        </table>
  </div>
</div>

<?php include '../util/footer.php' ?>

</body>
</html>


        


