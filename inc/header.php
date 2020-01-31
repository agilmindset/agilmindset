<header id="headerTopo">
    <nav class="navbar navbar-expand-lg fixed-top bg-dark">
        <a class="navbar-brand text-white" href="./" title="Acesse a Home da agilMindset">
            agil<span class="box">mindset</span> <small class="d-none d-sm-inline">| colaboração criativa</small>
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#menuTopo" aria-controls="menuTopo" aria-expanded="false" aria-label="Toggle navigation" title="Acessar submenu">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="menuTopo">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-auto">
                    <a class="nav-link text-white" href="sobre" rel="next" title="Sobre a agilmindset">Sobre</a>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link text-white" href="como-funciona" rel="next" title="Como funciona a agilmindset">Como Funciona</a>
                </li>
                <?php if((isset($logado) && $logado === false) || !isset($logado)) { ?>
                        <li class="nav-item ml-auto">
                            <a class="nav-link text-white" href="cadastrar-usuario" rel="next" title="Cadastre-se">Cadastre-se</a>
                        </li>
                        <li class="nav-item ml-auto">
                            <a class="nav-link text-white" href="login" rel="next" title="Faça Login">Login</a>
                        </li>
                <?php } else { ?>
                    <li class="nav-item ml-auto dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" id="perfilUsuarioMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $apelido ?></a>
                        <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="perfilUsuarioMenu">
                            <a class="dropdown-item my-0 py-2 disabled" href="editar-perfil/?id=<?php $id ?>" rel="next" title="Editar perfil">Editar Perfil</a>
                            <div class="dropdown-divider my-0"></div>
                            <a class="dropdown-item my-0 py-2 disabled" href="#/?id=<?php $id ?>" rel="next" title="Ver Meus Pontos">Meus Pontos</a>
                            <a class="dropdown-item my-0 py-2 disabled" href="#/?id=<?php $id ?>" rel="next" title="Ver Minhas Ideias">Minhas Ideias</a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>