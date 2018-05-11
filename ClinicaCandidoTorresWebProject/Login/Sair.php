<?php

session_start();

unset($_SESSION["id"]);
unset($_SESSION["nome"]);
unset($_SESSION["login"]);
unset($_SESSION["tipoUsuario"]);

header('Location: ../Telas/Index.php');