<?php

require_once './Usuario.php';

$usuario = new Usuario();
$usuario->retornaTudo($usuario);

?>

<html lang="pt-br">
    <head>
        <title>Tabela de Usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table border="1">
          <tr>
            <td> Id </td>
            <td> Nome</td>
            <td>Login</td>
            <td>Tipo de Usuario </td>
            <td>Ação</td>
          </tr>
          <?php while ($dado = $usuario->retornaDados("object"))  { ?>
          <tr>
            <td><?php echo $dado->IDUSUARIO ?> </td>
            <td><?php echo $dado->NOME  ?>  </td>
            <td><?php echo $dado->LOGIN  ?>  </td>
            <td><?php echo $dado->TIPOUSUARIO  ?>  </td>
            <td><a href="formAtualizaUsuario.php?usuario=<?php echo $dado->IDUSUARIO; ?>">Editar |</a> 
                <a href="RemoveUsuario.php?usuario=<?php echo $dado->IDUSUARIO; ?>">Excluir</a></td>
          </tr> 
          <?php } ?>
        </table> 
    </body>
</html>
