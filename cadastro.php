<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <link rel="stylesheet" href="src/css/normalize.css">
    <link rel="stylesheet" href="src/css/estilo.css">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Login</title>

</head>

<body>

    <h1 class="titulo">Todo<span class="titulo-part2">List<span></h1>

    <section>

        <div class="card-channel">
            <h3 class="login">Cadastro</h3>
            <input type="text" id="user" placeholder="Usuário" required>
            <input type="email" class="form-control" id="email" placeholder="E-mail" required>
            <input type="password" class="form-control" id="senha" placeholder="Senha" required>
            <button type="submit" class="btn btn-default" id="login">Cadastrar</button>
            <a class="recuperar-senha" href="#">Esqueceu sua senha?</a>
        </div>

    </section>
    <script src="js/login.js"></script>
</body>

</html>