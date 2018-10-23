<?php include_once 'top.php'?>    
  <form class="login-usuario" method="post" action="taskboard/taskboard.php">
    <h3 class="login">Login</h3>
    <input type="text" id="user" placeholder="Usuário" required>
    <input type="password" id="senha" placeholder="Senha" required>
    <button type="submit" id="login">Login</button>
  </form>
  <form class="login-usuario" action="cadastro/cadastro.php">
    <button type="submit" id="criar-cadastro">Cadastre-se</button>
    <a class="recuperar-senha" href="recuperar/recuperar.php">Esqueceu sua senha?</a>
  </form>
<?php include_once 'bottom.php'?>