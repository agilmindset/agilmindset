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
    <?php if(isset($usuarios) && $usuarios !== NULL && $usuarios !== "undefined" && $usuarios !== "" && $usuarios) { ?>
        <div class="container">
            <div class="row">
                <table class="table">
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
                            <td><button type="button" class="btn btn-light float-right mx-2" id="excluirUsuario" title="Excluir Cadastro" data-toggle="modal" data-target="#excluirUsuarioModal<?= $usuario["id"] ?>">Excluir Cadastro</button></td>
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
            </div>
        </div>
    <?php } ?>
    <?php require_once("./inc/banner-secundario.php"); ?>
</main>
<?php require_once("./inc/footer.php"); ?>
</body>

</html>