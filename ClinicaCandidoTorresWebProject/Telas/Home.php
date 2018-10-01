<?php
session_start();
require_once '../Agenda/Agenda.php';
require_once '../Agenda/ListarAgenda.php';
include_once '../Login/ProtectPaginas.php';
include_once '../Medico/Medico.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
}

$medic = new Medico();
$listaAgenda = new ListarAgenda();

//* LISTAR MEDICOS NO COMBOBOX
$medic->retornaTudo($medic);

?>﻿
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clinica Cândido Torres</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="../js/jquery-3.2.1.js"></script>
        
  <script type="text/javascript">
            
       $(document).ready(function(){
              
        var tipo_user = "<?php echo $tipo_user ?>";
              
        f(tipo_user != "Administrador"){
              document.getElementById("opcaoUser").style.display = "none";
        }
                               
      });
  </script>      
</head>
<body ondragstart="return false;">
	
<?php include '../util/nav.php' ?>
<form action="Home.php" method="POST" style="text-transform: uppercase;">
   <div class="container main">
      <div class="row input-group col-md-10 offset-md-1 SearchMed grid">
          <select name="nomeMedico" class="form-control" style="text-transform: uppercase;">
            <option value="">Selecione um Médico</option>
             <?php while ($dadoMedic = $medic->retornaDados("object")) { ?>  
             <option value="<?php echo $dadoMedic->NOME; ?>"><?php echo $dadoMedic->NOME; ?></option>
             <?php } ?>
          </select>
          <input type="submit" name="submit" class="btn btn-default">
      </div>

     <div class="row linha col-md-10 offset-md-1">
</form>
      <table class="table table-striped table-hover grid">
        <thead class="thead-dark">
          <tr>
            <th>PACIENTE</th>
            <th>MÉDICO</th>
            <th>ATENDIMENTO</th>
            <th>DATA</th>
            <th>TELEFONE</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="tbody-light">
          <?php 
          
          if($_POST){   
            $nMedico = $_POST['nomeMedico'];     
            $con = $listaAgenda->ListarPorFiltro2($nMedico);
          }else{
            $con = $listaAgenda->ListarDadosNaHome();    
          }

          while ($dado = $con->fetch_array()){ ?>
          <tr>
            <td><?php echo $dado['NOMEDOPACIENTE']; ?></td>
            <td><?php echo $dado['NOMEDOMEDICO']; ?></td>
            <td><?php echo $dado["TIPODEATENDIMENTO"]; ?></td>
            <td><?php echo date("d/m/Y", strtotime($dado["DATADEATENDIMENTO"])); ?></td>
            <td><?php echo $dado["CELULAR"]; ?></td>
            <td>
              <a href="" data-toggle="modal" data-target="example" >$</a>
            </td>
          </tr>
          <?php } ?> 
        </tbody>
      </table> 
     </div>
   </div>
   
   <?php include '../util/footer.php' ?>
</body>
</html>