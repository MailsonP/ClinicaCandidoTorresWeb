<?php
session_start();
require_once '../Agenda/Agenda.php';
require_once '../Agenda/ListarAgenda.php';
require_once '../Paciente/Paciente.php';

include_once '../Login/ProtectPaginas.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
}
 
$listaAgenda = new ListarAgenda();
$con = $listaAgenda->ListarDadosNaHome($listaAgenda);

?>﻿
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clinica Cândido Torres</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
   <div class="centro">
   	
	    <div class="conteudo">
         <table border="1" bordercolor = blue>
        <thead>
          <tr class="titulo-table">
            <th class="column2">Paciente</th>
            <th class="column3">Médico</th>
            <th class="column4">Tipo de Atendimento</th>
            <th class="column5">Data de Atendimento</th>
            
     
          </tr>
        </thead>
        <tbody>
             <?php while ($dado = $con->fetch_array()){ ?>
        <tr class="tabela">
            <td class="up"> <?php echo $dado->PACIENTE ?> </td>
            <td class="up"> <?php echo $dado->MEDICO ?> </td>        
            <td class="up"> <?php echo $dado->TIPOATENDIMENTO ?> </td>
            <td> <?php echo $dado->DATADEATENDIMENTO ?> </td>
            </td>
        </tr>
        </tbody>
            <?php } ?>          
        </table>
    </div>
</div>


	</nav>
	</header>
<footer>
  	<h1>Copyright &copy 2018 - Fábrica de Software</h1>
</footer>
</body>
</html>