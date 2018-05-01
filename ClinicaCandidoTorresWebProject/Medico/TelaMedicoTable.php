<?php
require_once '../Medico/Medico.php';

$medico = new Medico();
$medico->retornaTudo($medico);

?>
<html lang="pt-br">
    <head>
        <title>Tabela Medico</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       
        <table border="1">
          <tr>
            <td> Id </td>
            <td> Nome</td>
            <td> Telefone</td>
            <td> Email </td>
            <td> Conselho</td>
            <td> Especialidade </td>
            <td> Ação </td>
          </tr>
          
          <?php while ($dado = $medico -> retornaDados("object")){ ?>
          
          <tr>
            <td> <?php echo $dado->IDMEDICO ?> </td>
            <td> <?php echo $dado->NOME ?> </td>
            <td> <?php echo $dado->TELEFONE ?> </td>
            <td> <?php echo $dado->EMAIL ?> </td>
            <td> <?php echo $dado->CONSELHO ?> </td>
            <td> <?php echo $dado->ESPECIALIDADE ?> </td>
            <td><a href="../Telas/TelaAtualizarMedico.php?medico=<?php echo $dado->IDMEDICO?>">Editar |</a> 
                <a href="RemoverMedico.php?medico=<?php echo $dado->IDMEDICO  ?> ">Excluir |</a></td>
            </tr>
              <?php } ?>
            
        </table> 
             
    </body>
</html>
   
        


