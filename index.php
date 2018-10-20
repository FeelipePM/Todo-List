
<?php include_once('topIndex.php');?>    
  <form class="login-usuario" method="post" action="taskboard.php">
    <h3 class="login">Login</h3>
    <input type="text" id="user" placeholder="Usuário" required>
    <input type="password" class="form-control" id="senha" placeholder="Senha" required>
    <button type="submit" class="btn btn-default" id="login">Login</button>
  </form>
  <form class="login-usuario" action="cadastro.php">
    <button type="submit" id="criar-cadastro">Cadastre-se</button>
    <a class="recuperar-senha" href="recuperar.php">Esqueceu sua senha?</a>
  </form>
<?php include_once('rodapeIndex.php');?>