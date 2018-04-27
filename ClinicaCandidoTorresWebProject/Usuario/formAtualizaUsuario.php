<?php

require_once '../util/daoGenerico.php';
require_once './Usuario.php';

$usuario = new Usuario();
$usuario->retornaCampos($usuario);

while ($dado = $usuario->retornaDados("object")){ 

?>
<html lang="pt-br">
    <head>
        <title>CADASTRO DE USUARIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="Cadastro" style="text-align:center">
            
        <fieldset>
            <legend>Atualização de Usuario</legend>   
            <form action="#" method="POST">
            
                <p> Nome: </p>
                <input type="text" name="nome" value=<?php echo $dado->NOME ?>>
                <p> Login</p>
                <input type="text" name="login" value=<?php echo $dado->LOGIN ?> >
                <p> Senha</p>
                <input type="password" name="senha" value=<?php echo $dado->SENHA ?> >
                <p> Tipo de Usuario: </p>
                <select name="tipoUsuario" value=<?php echo $dado->TIPOUSUARIO ?>>
                <option value="Administrador"> Administrador </option>
                <option value="Recepcionista"> Recepcionista </option>
                 <option value="Medico"> Medico </option>
                </select>
                <br>
                <br>
                <button type="submit">Atualizar</button>
            </form>
        </fieldset>
      </div>
    </body>
</html>
<?php } ?>

<?php 
$valorId = $_GET;
if (isset($valorId["usuario"])){
    $id = $valorId["usuario"];
}

 $txtTitulo = $_POST;
//Recuperando valores do campo
if(isset($txtTitulo["nome"])){
$nome = $txtTitulo["nome"];
$login =$txtTitulo["login"];
$senha = $txtTitulo["senha"];
$tipo =$txtTitulo["tipoUsuario"];

$usuario = new Usuario();
$usuario->setValor("NOME", $nome);
$usuario->setValor("LOGIN", $login);
$usuario->setValor("SENHA", $senha);
$usuario->setValor("TIPOUSUARIO", $tipo);

$usuario->valorpk = $id;

if ($usuario->atualizar($usuario)){
    echo 'Dados atualizados com Sucesso!';
}else{
    echo 'Houve um erro ao tentar atualizar os dados os Dados no banco';
}

}
?>