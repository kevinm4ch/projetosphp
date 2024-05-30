<nav class="container mt-5 p-4 border rounder-3 shadow-sm bg-light">
    <div class="row algin-items-center">
        <div class="col">
            <h3>Aplicação PHP</h3>
        </div>

        <div class="col text-center">
            <a href="?rota=home" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Home</a>
            <span class="mx-2">|</span>
            <a href="?rota=page1" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Página 1</a>
            <span class="mx-2">|</span>
            <a href="?rota=page2" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Página 2</a>
            <span class="mx-2">|</span>
            <a href="?rota=page3" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Página 3</a>
        </div>

        <div class="col text-end">
            <span>Usuário logado: <strong><?=$_SESSION['usuario']->usuario?></strong></span>
            <span class="mx-2">|</span>
            <a href="?rota=logout" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Sair</a>

        </div>
    </div>
</nav>