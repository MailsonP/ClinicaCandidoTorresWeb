<html lang="pt-br">
    <head>
        <title>CADASTRO DE MEDICO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="Cadastro" style="text-align:center">
            
        <fieldset>
            <legend>Cadastro de Usuario</legend>   
            <form action="../Medico/InserirMedico.php" method="POST">
            
                <p> Nome: </p>
                <input type="text" name="nome">
                <p> Telefone:</p>
                <input type="text" name="telefone" >
                <p> Email:</p>
                <input type="text" name="email" >
                <p> Data de Nascimento </p>
                <input type="text" name="dtanascimento">
                <p> Conselho: </p>
                <input type= "text" name= "conselho">
                <p> Especialidade: </p>
                <input type="text" name="especialidade">
                <p> Função:</p>
                <input type="text" name="funcao">
                <p> Tipo de Atendimento:</p>
                <input type="text" name="tipodeatendimento">
               
                <br>
                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </fieldset>
      </div>
    </body>
</html>



