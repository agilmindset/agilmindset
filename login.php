<?php
$tituloPagina = "agil mindset | Login de Usuário";
$descricaoPagina = "Faça Login e acesse todas as ferramentas da agil mindset em uma versão de demonstração";
$urlPagina = "https://agilmindset.com/login.php";
$urlAmigavelPagina = "login";
if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]){
    if($_REQUEST["msg"] === "nao-autenticado"){
        $alerta = "Ops! Parece que algo de errado não deu certo... Por favor, verifique seus dados e tente novamente. Obrigado!";
    }
}
?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container-fluid px-0">
    <?php require_once("./inc/form-login.php"); ?>
    <?php require_once("./inc/banner-secundario.php"); ?>
</main>
<?php require_once("./inc/footer.php"); ?>
</body>

</html>