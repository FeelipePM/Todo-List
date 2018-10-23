<?php include_once 'top.php'?>
  <form class="login-usuario">  
    <h3 class="login">Cadastro</h3>
    <input type="text" id="user" placeholder="Usuário" required>
    <input type="email" id="email" placeholder="E-mail" required>
    <input type="password" id="senha" placeholder="Senha" required>
    <button type="submit" id="botao-cadastrar">Cadastrar</button>
    <a class="recuperar-senha" href="../recuperar/recuperar.php">Esqueceu sua senha?</a>
</form>  
<?php include_once 'bottom.php'?>