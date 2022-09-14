<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    

        <div class="container">

            <div class="card">
                <h1> Entrar </h1>

                <form action="testelogin.php" method="post">


                <div class="label-float">
                    <input type= "text" id="usuario" name="usuario" placeholder=""required>
                    <label for="usuario">Usuario</label>
                </div>

                <div class="label-float">
                    <input type= "password" id="senha" name="senha" placeholder=""required>
                    <label for="usuario">Senha</label>
                    <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
            
                </div>

                <div class="justify-center">
                    <input id="button" type="submit" name="submit" value="Logar">
                </div>

                </form>

        
                <div>
                    <hr>
                </div>

                <p> Não tem uma conta?
                    <a href="http://localhost/PROJETO_SESE/tela_cadastro/cadastro.php">Cadastre-se</a>
                </p>

        </div>




        
        <script src="js/formlogin.js"></script>
</body>
</html>