<?php include_once 'top.php'?>    
  <form class="login-usuario" method="post" action="taskboard/taskboard.php">
    <h3 class="login">Login</h3>
    <input type="text" id="user" placeholder="Usuário" required>
    <input type="password" id="senha" placeholder="Senha" required>
    <button type="submit" id="botao-login">Login</button>
    <a id="botao-cadastre-se" href="cadastro/cadastro.php">Cadastre-se</a>
    <a class="recuperar-senha" href="recuperar/recuperar.php">Esqueceu sua senha?</a>
<?php include_once 'bottom.php'?>