<?php
session_start();
require_once '../util/daoGenerico.php';
require_once '../Usuario/Usuario.php';

include_once '../Login/ProtectPaginas.php';
protect();

if(isset($_SESSION["tipoUsuario"])){
    $tipo_user = $_SESSION["tipoUsuario"];
    
    if ($tipo_user != "Administrador"){
        header("Location: ../Telas/Home.php");
    }
}

$usuario = new Usuario();

$metodo = $_GET;
if(isset($metodo["usuario"])){
    $id = $metodo["usuario"];
    
$usuario->valorpk=$id;
$usuario->pesquisarID($usuario);
}
        
$dado = $usuario->retornaDados("object");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar Usuário</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
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
    <nav class="menu" id="menu">
        <ul>
            <li><a href="../Telas/Home.php">Inicio</a></li>
            <li><a href="#">Cadastro</a>
                <ul>
                    <li id="opcaoUser"><a href="../Telas/TelaCadastroUsuario.php">Usuário</a></li>
                    <li><a href="../Telas/TelaCadastroMedico.php">Profissional</a></li>
                    <li><a href="../Telas/TelaCadastroPaciente.php">Paciente</a></li>
                </ul>
            </li>
            <li><a href="../Login/Sair.php">Sair</a></li>
        </ul>
    </nav>
    </header>
  <div class="centro">
    <div class="conteudo">
     <fieldset>
            <legend>Atualizar Usuario</legend>   
            <form action="../Usuario/AtualizaUsuario.php?usuario=<?php echo $dado->IDUSUARIO ?>" method="POST">
            
                <p> 
                    <label for="nomeU">Nome</label> 
                    
                </p>
                <input type="text" name="nome" value="<?php echo $dado->NOME ?>" id="nomeU" required>
                
                <p> 
                    <label for="loginU">Login</label> 
                    
                </p>
                    <input type="text" name="login" id="loginU" value="<?php echo $dado->LOGIN ?>" required>
                <p> 
                    <label for="senhaU">Senha</label> 

                </p>
                    <input type="password" name="senha" id="senhaU" value="<?php echo $dado->SENHA ?>" required>
                
                <p> 
                    <label for="tipoU">Tipo de Usuário</label>                 
                </p>
                    <select name="tipoUsuario" id="tipoU" value="<?php echo $dado->TIPOUSUARIO ?>">
                    <option value="Administrador"> Administrador </option>
                    <option value="Recepcionista"> Recepcionista </option>
                    <option value="Medico"> Médico </option>    
                    </select>
                <button type="submit" name="atualizar" class="bt-att">Salvar</button>
                <a href="../Usuario/TelaUsuarioTable.php"><button type="button" class="bt-voltar">Voltar</button></a>
            </form>
        </fieldset>
    </div>
  </div>
<footer>
    <h1>Copyright &copy 2018 - Fábrica de Software</h1>
</footer>
</body>
</html>
