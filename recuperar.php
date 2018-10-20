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
            <form class="login-usuario">

                <h3 class="login">Recuperar senha</h3>
                <input type="email" class="form-control" id="email" placeholder="E-mail cadastrado" required>
                <button type="submit" class=" btn btn-default" id="login">Recuperar</button>
                <a class="recuperar-senha" href="index.php">Cancelar</a>
            </form>
        </div>

    </section>
    <script src="js/login.js"></script>
</body>

</html>