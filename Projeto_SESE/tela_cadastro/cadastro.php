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
            <h1> Cadastrar </h1>
            

            <form action="cadastrar.php" method="get">

            

                <div id='msgError'></div>
                <div id='msgSucces'></div>

                <div class="label-float">
                    <input type="text" id="nome" name="nome" placeholder="" requerid>
                    <label id="labelNome" for="nome">Nome</label>
                </div>

                <div class="label-float">
                    <input type="text" id="usuario" name="usuario" placeholder="" requerid>
                    <label id="labelUsuario" for="usuario">Usuario</label>
                </div>

                <div class="label-float">
                    <input type="password" id="senha" name="senha" placeholder="" requerid>
                    <label id="labelSenha" for="senha">Senha</label>
                    <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
                </div>

                <div class="label-float">
                    <input type="password" id="confirmsenha" name="confirmsenha" placeholder="" requerid>
                    <label id="labelConfirmsenha" for="confirmsenha">Confirmar Senha</label>
                    <i id="verConfirmSenha" class="fa fa-eye" aria-hidden="true"></i>
                </div>

                <div class="justify-center">
                    <button onclick='cadastrar()'>Cadastrar</button>
                </div>




        </div>
    </div>
    </form>




    <script src="js/form.js"></script>

</body>

</html>

