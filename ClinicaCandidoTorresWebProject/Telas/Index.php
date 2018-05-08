<?php
session_start();

if(isset($_SESSION["login"])){
    header("Location: ./Home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clinica Cândido Torres</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../js/jquery-3.2.1.js"></script>
	<style type="text/css">
*{
	padding: 0;
	margin: 0;
}

body,html{
	width: 100%;
    height: 100%;
    overflow-y: auto;
    overflow-x: hidden;
    background-image: url(../img/fundo.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
	</style>
</head>
<body ondragstart="return false;">
	<div class="container-login">
    <img src="../img/logo.png">
    <form action="../Login/autenticarUsuario.php" method="POST">
      <div class="form-input">
        <input type="text" name="username" placeholder="Usuário">
      </div>
      <div class="form-input">
        <input type="password" name="password" placeholder="Senha">
      </div>
        <input type="submit" name="submit" value="LOGIN" class="btn-login">
    </form>
     <a href="#">Esqueceu sua senha?</a>
  </div>
</body>
</html>