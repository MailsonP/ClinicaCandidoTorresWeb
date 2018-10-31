<?php
session_start();
include_once '../Login/ProtectPaginas.php';
include_once '../Medico/Medico.php';
include_once '../Paciente/Paciente.php';
include_once '../Atendimento/Atendimento.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
}
   
   //INSTANCIAS DA CLASSE
   $medic = new Medico();
   $pac = new Paciente();
   $tipoAten = new Atendimento();
   //LISTAR NO COMBOBOX DO MODAL
   $medic->retornaTudo($medic);
   $pac->retornaTudo($pac);
   $tipoAten->retornaTudo($tipoAten);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Relatório</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  	<style type="text/css">
    .center{
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .meio{
      position: absolute;
    }

    h2{
      text-align: center;
      color: #f3f3f3;
      font-family: "raleway", sans-serif;
      margin: 20px 0;
    }

    .cor-row{
      padding: 10px;
      background: #202020;
      font-family: "raleway", sans-serif;
      -webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.18);
      -moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.18);
      box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.18);
    }

  	}
  	</style>	
</head>
<body>
  <?php include '../util/nav.php' ?>

<div class="center">
	<div class="container meio">
		<div class="row cor-row">
      <div class="form-group col-sm-6 c1">
        <h2>Agenda</h2>
				<a class="btn btn-light btn-lg btn-block bt" data-toggle="modal" data-target="#ModalMedico">POR PROFISSIONAL</a>
				<a class="btn btn-light btn-lg btn-block bt" data-toggle="modal" data-target="#ModalPaciente">POR PACIENTE</a>
				<a class="btn btn-light btn-lg btn-block bt" data-toggle="modal" data-target="#ModalAtendimento">POR ATENDIMENTO</a>
        <a class="btn btn-light btn-lg btn-block bt" data-toggle="modal" data-target="#ModalAgendaData">POR DATA</a>
      </div>

      <div class="form-group col-sm-6 c2">
        <h2>Paciente</h2>
        <a class="btn btn-light btn-lg btn-block bt" data-toggle="modal" data-target="#ModalSexo">POR SEXO</a>
        <a class="btn btn-light btn-lg btn-block bt" data-toggle="modal" data-target="#ModalPacienteDia">POR DIA</a>
        <a class="btn btn-light btn-lg btn-block bt" data-toggle="modal" data-target="#ModalPacienteMes">POR MES</a>
        <a class="btn btn-light btn-lg btn-block bt" data-toggle="modal" data-target="#ModalPacienteAno">POR ANO</a>
        <a class="btn btn-light btn-lg btn-block bt" data-toggle="modal" data-target="#ModalPacienteMesNiver">MES NASCIMENTO</a>
        <a class="btn btn-light btn-lg btn-block bt" data-toggle="modal" data-target="#ModalPacienteAnoNiver">ANO NASCIMENTO</a>
      </div>

    </div>
	</div>
</div>

  <?php include '../util/modalRelatorio.php' ?>

  <?php include '../util/footer.php' ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>