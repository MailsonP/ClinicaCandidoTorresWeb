<?php
session_start();
require_once '../Agenda/Agenda.php';
require_once '../Agenda/ListarAgenda.php';
include_once '../Login/ProtectPaginas.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
}
 
$listaAgenda = new ListarAgenda();
$con = $listaAgenda->ListarDadosNaHome();

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

   <div class="container main">
     <div class="row linha col-sm-10 offset-md-1">
      <table class="table table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>Paciente</th>
            <th>Médico</th>
            <th>Tipo de Atendimento</th>
            <th>Data de Atendimento</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="tbody-light">
          <?php while ($dado = $con->fetch_array()){ ?>
          <tr>
            <td><?php echo $dado['NOMEDOPACIENTE']; ?></td>
            <td><?php echo $dado['NOMEDOMEDICO']; ?></td>
            <td><?php echo $dado["TIPODEATENDIMENTO"]; ?></td>
            <td><?php echo date("d/m/Y", strtotime($dado["DATADEATENDIMENTO"])); ?></td>
            <td>
              <a href="">$</a>
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