<section class="container-fluid formCadastroSection mx-0 p-0">
  <article class="d-flex flex-wrap flex-md-nowrap align-items-center p-0">
    <img srcset="assets/img/erro-404.jpg 480w" sizes="480px" src="./assets/img/erro-404.jpg" class="col-12 col-sm-5 col-md-3 px-0 pl-md-0 pr-md-3 banner-img" alt="agilMindset | Erro 404 - Estamos trabalhando para resolvermos a questão.">
    <div class="col-12 col-sm-7 col-md-9 p-4">
      <h1 class="">Cadastre-se<br/><span class="box">E ganhe acesso à versão demo</span></h1>
      <p class="">Lembre-se: para se cadastrar é necessário estar de acordo com nossas <a href="./politicas-de-privacidade.php" target="_blank" rel="noopener noreferrer" title="Leia nossas políticas de privacidade">Políticas de Privacidade</a> e com os <a href="./termos-de-uso.php" target="_blank" rel="noopener noreferrer" title="Leia nossos Termos de Uso">Termos de Uso</a> do site. <br/>Se houver alguma dúvida, basta <a href="mailto:webmaster@agilmindset.com?subject=Contato%20via%20site%20agilmindset&body=Gostaria%20de%20maiores%20informações%20sobre..." title="Enviar email para webmaster@agilmindset.com" rel="noopener noreferer" target="_blank">entrar em contato com a gente</a>, estaremos à disposição para te ajudar!<br/>Ainda tem mais - complete seu cadastro depois e ganhe seus primeiros pontos!</p>
      <!-- <a href="./demo.php" target="_blank" class="btn btn-dark" title="Visite a versão demo" rel="noopener">Acessar versão demo</a> -->
    </div>
  </article>
  <article class="col-12 row">
    <form class="my-3 mx-auto" action="" method="post" autocomplete="on" id="formCadastroUsuario">
      <div class="form-row">
        <div class="form-group col-12 col-sm-6">
          <label for="inputNome">Nome</label>
          <input type="text" class="form-control" id="inputNome" name="inputNome" aria-describedby="nomeHelp" placeholder="Fulano" min-length="2" max-length="35" required autofocus tab-index="0">
          <small id="nomeHelp" class="form-text text-secondary">Insira seu primeiro nome aqui</small>
        </div>
        <div class="form-group col-12 col-sm-6">
          <label for="inputSobrenome">Sobrenome</label>
          <input type="text" class="form-control" id="inputSobrenome" name="inputSobrenome" aria-describedby="sobrenomeHelp" placeholder="da Silva"  min-length="2" max-length="35" required tab-index="1">
          <small id="sobrenomeHelp" class="form-text text-secondary">Insira seu sobrenome aqui</small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-12 col-sm-6">
          <label for="inputApelido">Apelido</label>
          <input type="text" class="form-control" id="inputApelido" name="inputApelido" aria-describedby="apelidoHelp" placeholder="Fulanito"  min-length="2" max-length="35" required tab-index="2">
          <small id="apelidoHelp" class="form-text text-secondary">Insira seu apelido aqui</small>
        </div>
        <div class="form-group col-12 col-sm-6">
          <label for="inputEmail">Email</label>
          <input type="text" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="fulano@dasilva.com"  min-length="9" max-length="35" required tab-index="3" autocomplete="off">
          <small id="emailHelp" class="form-text text-secondary">Insira seu Email aqui</small>
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col">
          <label for="inputSenha">Senha</label>
          <input type="password" class="form-control" id="inputSenha" name="inputSenha" aria-describedby="senhaHelp" placeholder="********" min-length="6" max-length="20" required tab-index="4" autocomplete="off">
          <small id="senhaHelp" class="form-text text-secondary">Insira uma senha com ao menos 6 caracteres</small>
        </div>
        <div class="form-group col">
          <label for="inputSenhaConfirmacao">Confirmação da Senha</label>
          <input type="password" class="form-control" id="inputSenhaConfirmacao" name="inputSenhaConfirmacao" aria-describedby="senhaConfirmacaoHelp" placeholder="********" required tab-index="5" autocomplete="off">
          <small id="senhaConfirmacaoHelp" class="form-text text-secondary">Insira a mesma senha novamente, por favor</small>
        </div>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" value="true" id="aceitePoliticasFormCadastro" name="aceitePoliticasFormCadastro" tab-index="6" required checked>
        <label class="form-check-label" for="aceitePoliticasFormCadastro">Estou de acordo com as <a href="./politicas-de-privacidade.php" target="_blank" rel="noopener, noreferer" title="Leia nossas Políticas de Privacidade">Políticas de Privacidade</a> e com os <a href="./termos-de-uso.php" target="_blank" rel="noopener, noreferer" title="Leia nossos Termos de Uso">Termos de Uso</a> do site.</label>
      </div>
      <button type="submit" class="btn btn-dark float-right" value="cadastrarUsuario" title="Enviar informações para cadastro">Cadastrar</button>
      <!-- <a href="#" class="btn btn-dark float-right" title="Inspire-se com nossos artigos! Clique aqui!" rel="next">Inspire-se</a> -->
    </form>
    <p class="col-12 text-center">Opa! Acho que já tenho cadastro, desejo fazer o <a href="./login.php" rel="next" title="Fazer login">login</a></p>
  </article>
</section>