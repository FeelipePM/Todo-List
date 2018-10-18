function registrar(){
    let formulario = document.querySelector('.login-usuario');
    
    formulario.textContent = '';
    formulario.innerHTML = "<h3 class='login'>Cadastro</h3><input type='text' id='user' placeholder='Usuário' required><input type='password' class='form-control' id='senha' placeholder='Senha' required><input type='password' class='form-control' id='senha' placeholder='Digite novamente' required><button type='submit' class='btn btn-default' id='login'>Cadastrar</button><a class='recuperar-senha' href='#'>Recuperar Senha</a>";

    event.preventDefault();
}