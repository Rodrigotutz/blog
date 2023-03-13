<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= $router->route('home.home') ?>">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link <?= $homeActive ?? "" ?>" href="<?= $router->route('home.home') ?>">Últimas Notícias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $loginActive ?? "" ?>" href="<?= $router->route('home.login') ?>">Entrar</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>