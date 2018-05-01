<?php
require_once '../util/daoGenerico.php';
require_once '../Medico/Medico.php';
$medico = new Medico();
$metodo = $_GET;
if(isset($metodo["medico"])){
    $id = $metodo["medico"];
    $medico->valorpk = $id;
    $medico->pesquisarID($medico);
}
$dado = $medico->retornaDados("object");
?>

<html lang="pt-br">
    <head>
        <title>Atualizar Medico</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="Cadastro" style="text-align:center">
            
        <fieldset>
            <legend>Cadastro de Usuario</legend>   
            <form action="../Medico/AtualizaMedico.php?medico=<?php echo $dado->IDMEDICO ?>" method="POST">
            
                <p> Nome: </p>
                <input type="text" name="nome" value="<?php echo $dado->NOME ?>">
                <p> Telefone:</p>
                <input type="text" name="telefone" value="<?php echo $dado->TELEFONE ?>"  >
                <p> Email: </p>
                <input type="text" name="email" value="<?php echo $dado->EMAIL ?>" >
                <p> Data de Nascimento </p>
                <input type="text" name="dtanascimento" value="<?php echo $dado->DTANASCIMENTO ?>">
                <p> Conselho: </p>
                <input type= "text" name= "conselho" value="<?php echo $dado->CONSELHO ?>">
                <p> Especialidade: </p>
                <input type="text" name="especialidade" value="<?php echo $dado->ESPECIALIDADE ?>">
                <p> Função: </p>
                <input type="text" name="funcao" value="<?php echo $dado->FUNCAO ?>">
                <p> Tipo de Atendimento:</p>
                <input type="text" name="tipodeatendimento" value="<?php echo $dado->TIPODEATENDIMENTO ?>">
               
                <br>
                <br>
                <button type="submit">Atualizar</button>
            </form>
        </fieldset>
      </div>
    </body>
</html>



