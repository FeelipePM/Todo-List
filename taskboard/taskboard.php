<?php include_once 'top.php';?>
  <h1 class="titulo">Todo<span class="titulo-part2">List<span></h1>
  <form class="lista-tarefas">
    <input class="filtrar" type="search" placeholder="Filtrar Tarefa">
    <button class="filtrar-tarefas">Filtrar</button>
  </form>
  <section>
    <div class="card-dashboard">
      <img class="logout-img" src="../src/img/logout1.jpg" alt="logout">
      <h3 class="titulo-tarefas">Lista de Tarefas</h3>
      <form class="lista-tarefas">
        <input type="text" class="input-tarefa" placeholder="adicione uma tarefa">
        <button type="submit" id="addTarefa">+ adicionar tarefa</button>
        <img class="add-amigo" src="../src/img/add-amigo.png" alt="logout">
      </form>
      <section class="tarefas">
        <ul>
          <?php
            //for para carregar a lista
          ?>
          <hr class="linha">
          <li class="item">
          <input class="checkbox" type="checkbox" name="atividade">
            <label for="atividade">Estudar Vue.Js</label>
            <img src="../src/img/iconlixeira.png" alt="icone-lixeira" id="icones" class="icone-lixeira">
            <img src="../src/img/editar.png" alt="icone-editar" id="icones" class="icone-editar">
          </li>
          <hr class="linha">
          <li class="item">
          <input class="checkbox" type="checkbox" name="atividade">
            <label for="atividade">Finalizar Commit</label>
            <img src="../src/img/iconlixeira.png" alt="icone-lixeira" id="icones" class="icone-lixeira">
            <img src="../src/img/editar.png" alt="icone-editar" id="icones" class="icone-editar">
          </li>
          <hr class="linha">
        </ul>
      </section>

    </div>
  </section>
<?php include_once 'bottom.php';?>