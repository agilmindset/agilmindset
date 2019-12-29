<section class="container-fluid formCadastroSection mx-0 p-0">
  <article class="d-flex flex-wrap flex-md-nowrap align-items-center p-0">
    <img srcset="./assets/img/cadastrar-usuario-150x150.jpg 150w, ./assets/img/cadastrar-usuario-200x200.jpg 200w, ./assets/img/cadastrar-usuario-250x250.jpg 250w, ./assets/img/cadastrar-usuario-300x300.jpg 300w, ./assets/img/cadastrar-usuario-350x350.jpg 350w, ./assets/img/cadastrar-usuario-400x400.jpg 400w, ./assets/img/cadastrar-usuario-450x450.jpg 450w, ./assets/img/cadastrar-usuario-500x500.jpg 500w, ./assets/img/cadastrar-usuario-550x550.jpg 550w, ./assets/img/cadastrar-usuario-574x574.jpg 574w, ./assets/img/cadastrar-usuario-267x267.jpg 267w, ./assets/img/cadastrar-usuario-300x300.jpg 300w, ./assets/img/cadastrar-usuario-224x224.jpg 224w, ./assets/img/cadastrar-usuario-254x254.jpg 254w, ./assets/img/cadastrar-usuario-304x304.jpg 304w, ./assets/img/cadastrar-usuario-344x344.jpg 344w, ./assets/img/cadastrar-usuario-464x464.jpg 464w, ./assets/img/cadastrar-usuario-484x484.jpg 484w, ./assets/img/cadastrar-usuario-614x614.jpg 614w" sizes="(min-width: 2500px) 614px, (min-width: 2000px) 484px, (min-width: 1920px) 464px, (min-width: 1440px) 344px, (min-width: 1280px) 304px, (min-width: 1080px) 254px, (min-width: 960px) 224px, (min-width: 720px) 300px, (min-width: 640px) 267px, (min-width: 574px) 574px, (min-width: 550px) 550px, (min-width: 500px) 500px, (min-width: 450px) 450px, (min-width: 400px) 400px, (min-width: 350px) 350px, (min-width: 300px) 300px, (min-width: 250px) 250px, (min-width: 200px) 200px, 150px" src="./assets/img/cadastrar-usuario.jpg" class="col-12 col-sm-5 col-md-3 px-0 pl-md-0 pr-md-3 banner-img" alt="Cadastro de usuário - cadastre-se e tenha acesso à versão de demonstração da agilmindset">
    <div class="col-12 col-sm-7 col-md-9 p-4">
      <h1 class="">Cadastre-se<br/><span class="box">E ganhe acesso à versão demo</span></h1>
      <p class="">Lembre-se: para se cadastrar é necessário estar de acordo com nossas <a href="politicas-de-privacidade" target="_blank" rel="noopener noreferrer" title="Leia nossas políticas de privacidade">Políticas de Privacidade</a> e com os <a href="termos-de-uso" target="_blank" rel="noopener noreferrer" title="Leia nossos Termos de Uso">Termos de Uso</a> do site. <br/>Se houver alguma dúvida, basta <a href="mailto:webmaster@agilmindset.com?subject=Contato%20via%20site%20agilmindset&body=Gostaria%20de%20maiores%20informações%20sobre..." title="Enviar email para webmaster@agilmindset.com" rel="noopener noreferrer" target="_blank">entrar em contato com a gente</a>, estaremos à disposição para te ajudar!<br/>Ainda tem mais - complete seu cadastro depois e ganhe seus primeiros pontos!</p>
    </div>
  </article>
  <article class="col-12 row mx-auto px-4">
    <form class="mt-0 mb-3 mx-auto" action="" method="post" autocomplete="on" id="formCadastroUsuario">
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
        <div class="form-group col-12 col-sm-6">
          <label for="inputSenha">Senha</label>
          <input type="password" class="form-control" id="inputSenha" name="inputSenha" aria-describedby="senhaHelp" placeholder="********" min-length="6" max-length="20" required tab-index="4" autocomplete="off">
          <small id="senhaHelp" class="form-text text-secondary">Insira uma senha com ao menos 6 caracteres</small>
        </div>
        <div class="form-group col-12 col-sm-6">
          <label for="inputSenhaConfirmacao">Confirmação da Senha</label>
          <input type="password" class="form-control" id="inputSenhaConfirmacao" name="inputSenhaConfirmacao" aria-describedby="senhaConfirmacaoHelp" placeholder="********" required tab-index="5" autocomplete="off">
          <small id="senhaConfirmacaoHelp" class="form-text text-secondary">Insira a mesma senha novamente, por favor</small>
        </div>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" value="true" id="aceitePoliticasFormCadastro" name="aceitePoliticasFormCadastro" tab-index="6" required checked>
        <label class="form-check-label" for="aceitePoliticasFormCadastro">Estou de acordo com as <a href="politicas-de-privacidade" target="_blank" rel="noopener, noreferer" title="Leia nossas Políticas de Privacidade">Políticas de Privacidade</a> e <a href="termos-de-uso" target="_blank" rel="noopener, noreferer" title="Leia nossos Termos de Uso">Termos de Uso</a> do site.</label>
      </div>
      <button type="submit" class="btn btn-dark float-right" value="cadastrarUsuario" title="Enviar informações para cadastro">Cadastrar</button>
    </form>
    <p class="col-12 mt-3 text-center">Opa! Acho que já tenho cadastro, desejo fazer o <a href="login" rel="next" title="Fazer login">login</a></p>
  </article>
</section>