<?php $tituloPagina = "agil mindset | Welcome!"; ?>
<?php $descricaoPagina = "Share ideas, improve processes, empower people, get to know your customers better"; ?>
<?php require_once("./inc/head.php"); ?>

<body>
    <?php require_once("./inc/header.php"); ?>
    <main class="container-fluid erro-404">
        <section class="container-fluid mx-0 p-5">
            <article class="d-flex flex-wrap flex-md-nowrap align-items-center p-0">
                <img srcset="assets/img/erro-404.jpg 480w" sizes="480px" src="assets/img/erro-404.jpg" class="col-12 col-sm-5 col-md-3 px-0 pl-md-0 pr-md-3 banner-img" alt="agilMindset | Uma plataforma para dividirmos insights e sugerirmos projetos inovadores">
                <div class="col-12 col-sm-7 col-md-9 p-4">
                    <h1 class="">Ops!<br/><span class="box">Nos desculpe...</span></h1>
                    <p class="">Parece que cometemos algum engano, infelizmente a <b>página não foi encontrada</b>...</p>
                    <p>Por favor, acesse as páginas listadas no menu acima, acesse a <a href="./index.php" rel="next" target="_self" title="Acessar página inicial">página inicial</a> ou, se preferir, <a href="mailto:webmaster@agilmindset.com?subject=Mensagem%20enviada%20via%20site%20agilMindset" rel="noopener" target="_blank" title="Enviar email para webmaster@agilmindset.com">entre em contato conosco</a> - teremos prazer em ajudar você!</p>
                    <p>Ou... aproveite e acesse a versão demo de nossa ferramenta, basta clicar no link abaixo!</p>
                    <a href="./demo.php" target="_blank" class="btn btn-dark" title="Visite a versão demo" rel="noopener">Acessar versão Demo</a>
                    <!-- <a href="./cadastro.php" class="btn btn-dark" title="Cadastre-se e cadastre seu time!" rel="next">Cadastre-se</a> -->
                </div>
            </article>
        </section>
    </main>
    <?php require_once("./inc/footer.php"); ?>
</body>

</html>