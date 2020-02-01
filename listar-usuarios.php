<?php
$tituloPagina = "agil mindset | Usuários";
$descricaoPagina = "Lista de Usuários Cadastrados em AgilMindset";
$urlPagina = "https://agilmindset.com/listar-usuarios.php";
$urlAmigavelPagina = "listar-usuarios";
?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container-fluid px-0">
    <?php require_once("./utils/listarUsuarios.php"); ?>
    <div class="container-fluid formCadastroSection mx-0 p-0">
        <article class="d-flex flex-wrap flex-md-nowrap align-items-center p-0">
            <img srcset="./assets/img/cadastrar-usuario-150x150.jpg 150w, ./assets/img/cadastrar-usuario-200x200.jpg 200w, ./assets/img/cadastrar-usuario-250x250.jpg 250w, ./assets/img/cadastrar-usuario-300x300.jpg 300w, ./assets/img/cadastrar-usuario-350x350.jpg 350w, ./assets/img/cadastrar-usuario-400x400.jpg 400w, ./assets/img/cadastrar-usuario-450x450.jpg 450w, ./assets/img/cadastrar-usuario-500x500.jpg 500w, ./assets/img/cadastrar-usuario-550x550.jpg 550w, ./assets/img/cadastrar-usuario-574x574.jpg 574w, ./assets/img/cadastrar-usuario-267x267.jpg 267w, ./assets/img/cadastrar-usuario-300x300.jpg 300w, ./assets/img/cadastrar-usuario-224x224.jpg 224w, ./assets/img/cadastrar-usuario-254x254.jpg 254w, ./assets/img/cadastrar-usuario-304x304.jpg 304w, ./assets/img/cadastrar-usuario-344x344.jpg 344w, ./assets/img/cadastrar-usuario-464x464.jpg 464w, ./assets/img/cadastrar-usuario-484x484.jpg 484w, ./assets/img/cadastrar-usuario-614x614.jpg 614w" sizes="(min-width: 2500px) 614px, (min-width: 2000px) 484px, (min-width: 1920px) 464px, (min-width: 1440px) 344px, (min-width: 1280px) 304px, (min-width: 1080px) 254px, (min-width: 960px) 224px, (min-width: 720px) 300px, (min-width: 640px) 267px, (min-width: 574px) 574px, (min-width: 550px) 550px, (min-width: 500px) 500px, (min-width: 450px) 450px, (min-width: 400px) 400px, (min-width: 350px) 350px, (min-width: 300px) 300px, (min-width: 250px) 250px, (min-width: 200px) 200px, 150px" src="./assets/img/cadastrar-usuario.jpg" class="col-12 col-sm-5 col-md-3 px-0 pl-md-0 pr-md-3 banner-img" alt="Cadastro de usuário - cadastre-se e tenha acesso à versão de demonstração da agilmindset">
            <div class="col-12 col-sm-7 col-md-9 p-4">
            <h2 class="">Cadastre-se<br /><span class="box">E ganhe acesso à versão demo</span></h2>
            <p class="">Lembre-se: para se cadastrar é necessário estar de acordo com nossas <a href="politicas-de-privacidade" target="_blank" rel="noopener noreferrer" title="Leia nossas políticas de privacidade">Políticas de Privacidade</a> e com os <a href="termos-de-uso" target="_blank" rel="noopener noreferrer" title="Leia nossos Termos de Uso">Termos de Uso</a> do site. <br />Se houver alguma dúvida, basta <a href="mailto:webmaster@agilmindset.com?subject=Contato%20via%20site%20agilmindset&body=Gostaria%20de%20maiores%20informações%20sobre..." title="Enviar email para webmaster@agilmindset.com" rel="noopener noreferrer" target="_blank">entrar em contato com a gente</a>, estaremos à disposição para te ajudar!<br />Ainda tem mais - complete seu cadastro depois e ganhe seus primeiros pontos!</p>
            </div>
        </article>
        <article class="col-12 row mx-auto px-4">
            <?php if(isset($usuarios) && $usuarios !== NULL && $usuarios !== "undefined" && $usuarios !== "" && $usuarios) { ?>
                <table class="table mx-2">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome Completo</th>
                            <th scope="col">Apelido</th>
                            <th scope="col">email</th>
                            <th scope="col">Nível</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($usuarios as $usuario){ ?>
                        <tr>
                            <th scope="row"><?= $usuario["id"] ?></th>
                            <td><?= $usuario["nome"] . " " . $usuario["sobrenome"] ?></td>
                            <td><?= $usuario["apelido"] ?></td>
                            <td><?= $usuario["email"] ?></td>
                            <td><?= $usuario["nivel"] ?></td>
                            <td colspan="2">
                                <a class="btn btn-light float-right" href="editar-usuario?idEditar=<?= $usuario["id"] ?>" rel="next" title="Editar Cadastro">Editar</a>
                                <button type="button" class="btn btn-light float-right mx-2" id="excluirUsuario<?= $usuario["id"] ?>" title="Excluir Cadastro" data-toggle="modal" data-target="#excluirUsuarioModal<?= $usuario["id"] ?>">Excluir Cadastro</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="excluirUsuarioModal<?= $usuario["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="excluirUsuarioModal<?= $usuario["id"] ?>Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="excluirUsuarioModal<?= $usuario["id"] ?>Label">Confirmar exclusão de cadastro</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><?= $_SESSION["nome"] ?>, você tem certeza de que deseja excluir seu cadastro? <br/>Não será possível recuperá-lo posteriormente, ok?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <form action="utils/excluirUsuario.php" method="post">
                                        <input type="hidden" name="inputId" value="<?= $usuario["id"] ?>">
                                        <button type="submit" value="excluindoViaLista" name="excluirUsuarioViaLista" title="Excluir sua Conta de Usuário" rel="next" class="btn btn-danger">Excluir Cadastro</a>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <?php header("Location: ../../index.php"); ?>
            <?php } ?>
        </article>
    </div>
    <?php require_once("./inc/banner-secundario.php"); ?>
</main>
<?php require_once("./inc/footer.php"); ?>
</body>

</html>