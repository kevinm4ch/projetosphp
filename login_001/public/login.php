<?php 
defined('CONTROL') or die('Acesso negado');

//verifica se o formulario foi submetido
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //verifca se o usuario e a senha foram submetidas
    $usuario = $_POST['usuario'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $erro = null;

    if(empty($usuario) || empty($senha)){
        $erro = 'Usuario e senha são obrigatórios';
    }

    //verifica se o usuário e senha são válidos
    if(empty($erro)){
        $usuarios = require_once __DIR__ . '/../inc/usuarios.php';

        foreach ($usuarios as $u) {
            if($u['usuario'] == $usuario && password_verify($senha, $u['senha'])){

                //efetua o login
                $_SESSION['usuario'] = $usuario;

                //voltar a pagina inicial;
                header('location:index.php?rota=home');
            } 
        }

        //login inválido
        $erro = 'Uuário e/ou senha inválidos.';
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="index.php?rota=login" method="post">
        <h1>Login</h1>
        <div>
            <label for="usuario">Usuário</label>
            <input type="email" name="usuario" id="usuario">
        </div>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>
    <?php if(!empty($erro)):?>
        <p style="color:red"><?=$erro?></p>
    <?php endif;?>
</body>
</html>