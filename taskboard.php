<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="src/css/normalize.css">
  <link rel="stylesheet" href="src/css/taskboard.css">
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <title>Dashboard</title>
</head>

<body>
  <h1 class="titulo">Todo<span class="titulo-part2">List<span></h1>
  <form class="lista-tarefas">
    <input class="filtrar" type="search" placeholder="Filtrar Tarefa">
    <button class="filtrar-tarefas">Filtrar</button>
  </form>
  <section>
    <div class="card-dashboard">
      <img class="logout-img" src="./src/img/logout1.jpg" alt="logout">
      <h3 class="titulo-tarefas">Lista de Tarefas</h3>
      <form class="lista-tarefas">
        <input type="text" class="input-tarefa" placeholder="adicione uma tarefa">
        <button type="submit" id="addTarefa">+ adicionar tarefa</button>
        <img class="add-amigo" src="./src/img/add-amigo.png" alt="logout">
      </form>
      <section class="tarefas">
        <ul>
          <?php
            //for para carregar a lista
          ?>
          <hr class="linha">
          <li class="item">
            <label for="atividade">Vue.Js</label>
            <input class="checkbox" type="checkbox" name="atividade">
            <a href="deletar?id=<?'a'?>" class="deletar">Deletar</a>
          </li>
          <?php?>
        </ul>
      </section>

    </div>
  </section>
</body>

</html>