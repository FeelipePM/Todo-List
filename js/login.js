function cadastrar(){
    let formulario = document.querySelector('.login-usuario');
    
    formulario.textContent = '';
    formulario.innerHTML = "<h3 class='login'>Cadastro</h3><input type='text' id='user' placeholder='Usuário' required><input type='email' class='form-control' id='email' placeholder='E-mail' required><input type='password' class='form-control' id='senha' placeholder='Senha' required><button type='submit' class='btn btn-default' id='login'>Cadastrar</button><a class='recuperar-senha' onclick='recuperar()' href='#'>Recuperar Senha</a>";
    event.preventDefault();
}

function recuperar(){
    let formulario = document.querySelector('.login-usuario');
    formulario.textContent = '';
    formulario.innerHTML = "<h3 class='login'>Recuperar senha</h3><input type='email' class='form-control' id='email' placeholder='E-mail cadastrado' required><button type='submit' onclick='enviadoSucesso()' class='btn btn-default' id='login'>Recuperar</button>";
    event.preventDefault();
}
function enviadoSucesso(){
    let formulario = document.querySelector('.login-usuario');
    formulario.textContent = '';
    formulario.innerHTML = "<h3 class='login'>Recuperar senha</h3><p>Enviado com sucesso</p>";
    event.preventDefault();
}