<?php
session_start();

include_once '../Login/ProtectPaginas.php';
protect();

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
	<link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../js/jquery-3.2.1.js"></script>
	<script src="../js/login.js"></script>
</head>
<body ondragstart="return false;">
	<header id="topo">
	<input type="checkbox" id="bt_menu">
	<label for="bt_menu">&#9776;</label>
	<div id="right"><img src="../img/cct.png"></div>
	<nav class="menu" id="menu">
		<ul>
			<li><a href="../Telas/Index.php">Inicio</a></li>
			<li><a href="#">Cadastro</a>
				<ul>
					<li><a href="../Telas/TelaCadastroUsuario.php">Usuário</a></li>
					<li><a href="../Telas/TelaCadastroMedico.php">Médico</a></li>
					<li><a href="../Telas/TelaCadastroPaciente.php">Paciente</a></li>
				</ul>
			</li>
                        <li><a href="../Login/Sair.php">Sair</a></li>
		</ul>
	</nav>
	</header>
<footer>
  	<h1>Copyright &copy 2018 - Fábrica de Software</h1>
</footer>
</body>
</html>