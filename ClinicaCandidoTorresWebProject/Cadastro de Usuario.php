<html lang="pt-br">
    <head>
        <title>CADASTRO DE USUARIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="Cadastro" style="text-align:center">
            
        <fieldset>
            <legend>Cadastro de Usuario</legend>   
            <form action="Usuario/RegistraUsuario.php" method="POST">
            
                <p> Nome: </p>
                <input type="text" name="nome">
                <p> Login</p>
                <input type="text" name="login" >
                <p> Senha</p>
                <input type="password" name="senha" >
                <p> Tipo de Usuario: </p>
                <select name="tipoUsuario">
                <option value="Administrador"> Administrador </option>
                <option value="Recepcionista"> Recepcionista </option>
                 <option value="Medico"> Medico </option>
                </select>
                <br>
                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </fieldset>
      </div>
    </body>
</html>