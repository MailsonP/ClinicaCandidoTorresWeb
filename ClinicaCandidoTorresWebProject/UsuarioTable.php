<?php
    include './BancoDeDados/Conexao_Banco_ClinicaTorres.php.inc';
    $link = mysqli_connect("localhost","root","","clinica_candido_torres_database");
    
    $sql = "SELECT * FROM usuario";
    
    $resultado = mysqli_query($link, $sql);

?>

<html lang="pt-br">
    <head>
        <title>Testando</title>
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
          <?php while ($dado = $resultado->fetch_array()) { ?>
          <tr>
              <td><?php echo $dado["IDUSUARIO"]; ?> </td>
            <td><?php echo $dado["NOME"]; ?>  </td>
            <td><?php echo $dado["LOGIN"]; ?>  </td>
            <td><?php echo $dado["TIPOUSUARIO"]; ?>  </td>
            <td><a href="edita&Usuario.php?usuario=<?php echo $dado["IDUSUARIO"]; ?>">Editar |</a> 
                <a href="exclui&Usuario.php?usuario=<?php echo $dado["IDUSUARIO"]; ?>">Excluir</a></td>
          </tr> 
          <?php } ?>
        </table> 
    </body>
</html>

