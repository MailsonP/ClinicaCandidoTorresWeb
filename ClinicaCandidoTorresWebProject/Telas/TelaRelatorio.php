<?php
session_start();
include_once '../Login/ProtectPaginas.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Relatório</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  	<style type="text/css">
		*{
			box-sizing: border-box;
		}

  		@media screen and (max-width: 575px){
  			div .row{
  				margin: 0 20px;
  			}
  		}
  	</style>	
</head>
<body>
	<div class="container">
		<div class="row" style="text-align: center; cursor: pointer;">
			<div class="col-sm-3" style="background: cyan; height: 50px; line-height: 50px; font-weight: 600;">
				<a href="../Relatorio/AtendimentoPorProfissional.php">Atendimento por Profissional</a>
			</div>
			<div class="col-sm-3" style="background: #f23355; height: 50px; line-height: 50px; font-weight: 600;">
				Paciente
			</div>
			<div class="col-sm-3" style="background: cyan; height: 50px; line-height: 50px; font-weight: 600;">
				Profissional
			</div>
			<div class="col-sm-3" style="background: #f23355; height: 50px; line-height: 50px; font-weight: 600;">
				d
			</div>
		</div>
	</div>
</body>
</html>