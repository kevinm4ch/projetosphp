<?php 
defined('CONTROL') or die('Acesso negado');
?>

<hr>
<span><strong>Usuário: </strong><?=$_SESSION['usuario']?></span>
<hr>

<nav>
    <a href="?rota=home">Home</a>
    <a href="?rota=page1">Página 1</a>
    <a href="?rota=page2">Página 2</a>
    <a href="?rota=page3">Página 3</a>
    <a href="?rota=logout">Sair</a>
</nav>