<?php

session_start();

unset($_SESSION["id"]);
unset($_SESSION["nome"]);
unset($_SESSION["login"]);

header('Location: ../Telas/Index.php');