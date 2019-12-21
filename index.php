<?php $tituloPagina = "magicBox | Welcome!"; ?>
<?php $descricaoPagina = "Share ideas, improve processes, empower people, get to know your customers better"; ?>
<?php require_once("./inc/head.php"); ?>

<body>
    <?php require_once("./inc/header.php"); ?>
    <main class="container-fluid">
    <section id="carouselPrincipal" class="row carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img srcset="assets/img/banner01-xl.jpg 1140w, assets/img/banner01-lg.jpg 960w, assets/img/banner01-md.jpg 720w, assets/img/banner01-sm.jpg 540w, assets/img/banner01-xs.jpg 480w" sizes="(min-width: 1200px) 1140px, (min-width: 992px) 960px, (min-width: 768px) 720px, (min-width: 576px) 540px, 480px" src="assets/img/banner01-lg.jpg" class="d-block w-100" alt="magicBox | Uma plataforma para dividirmos insights e sugerirmos projetos inovadores">
                <div class="carousel-caption d-none d-sm-block">
                    <h5 class="text-info">magicBox</h5>
                    <p class="text-dark">Uma plataforma para dividirmos insights e sugerirmos projetos inovadores</p>
                    <a href="./login.php" class="btn btn-info" title="Faça Login" rel="next">Login</a>
                    <a href="./cadastro.php" class="btn btn-info" title="Cadastre-se" rel="next">Cadastro</a>
                </div>
                </div>
                <div class="carousel-item">
                <img srcset="assets/img/banner02-xl.jpg 1140w, assets/img/banner02-lg.jpg 960w, assets/img/banner02-md.jpg 720w, assets/img/banner02-sm.jpg 540w, assets/img/banner02-xs.jpg 480w" sizes="(min-width: 1200px) 1140px, (min-width: 992px) 960px, (min-width: 768px) 720px, (min-width: 576px) 540px, 480px" src="assets/img/banner02-lg.jpg" class="d-block w-100" alt="Pesquise ideias | Busque por ideia através de filtros e categorias">
                <div class="carousel-caption d-none d-sm-block">
                    <h5 class="text-info">Pesquise ideias</h5>
                    <p class="text-dark">Busque por ideia através de filtros e categorias</p>
                    <a href="./login.php" class="btn btn-info" title="Faça Login" rel="next">Login</a>
                    <a href="./cadastro.php" class="btn btn-info" title="Cadastre-se" rel="next">Cadastro</a>
                </div>
                </div>
                <div class="carousel-item">
                <img srcset="assets/img/banner03-xl.jpg 1140w, assets/img/banner03-lg.jpg 960w, assets/img/banner03-md.jpg 720w, assets/img/banner03-sm.jpg 540w, assets/img/banner03-xs.jpg 480w" sizes="(min-width: 1200px) 1140px, (min-width: 992px) 960px, (min-width: 768px) 720px, (min-width: 576px) 540px, 480px" src="assets/img/banner03-lg.jpg" class="d-block w-100" alt="Colabore também | Envie novas ideias ou dê sugestões à ideias já cadastradas">
                <div class="carousel-caption d-none d-sm-block">
                    <h5 class="text-info">Colabore também</h5>
                    <p class="text-dark">Envie novas ideias ou dê sugestões à ideias já cadastradas</p>
                    <a href="./login.php" class="btn btn-info" title="Faça Login" rel="next">Login</a>
                    <a href="./cadastro.php" class="btn btn-info" title="Cadastre-se" rel="next">Cadastro</a>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselPrincipal" role="button" data-slide="prev" title="Ver slide anterior">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselPrincipal" role="button" data-slide="next" title="Ver próximo slide">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </section>
    </main>
    <?php require_once("./inc/footer.php"); ?>
</body>

</html>


<!-- <section class="row topo">
    <h1 class="col-12"><?php //$tituloPagina ?></h1>
    <p class="col-12"><?php //$descricaoPagina ?></p>
</section>
<section class="container conteudo">
    <article class="row my-5">
        <header class="col-7 mb-2">
            <h2>Boas vindas!</h2>
            <p>Para utilizar nosso site é necessário estar cadastrado. Por favor, registre-se ou faça login.</p>
        </header>
        <nav class="col-5">
            <a href="./login.php" class="btn btn-info mt-4 ml-5">Login</a>
            <a href="./cadastro.php" class="btn btn-info mt-4 ml-1">Cadastro</a>
        </nav>
    </article>
</section> -->