<div class="container-fluid formLoginSection mx-0 p-0">
  <article class="d-flex flex-wrap flex-md-nowrap align-items-center p-0">
    <img srcset="./assets/img/login-150x150.jpg 150w, ./assets/img/login-200x200.jpg 200w, ./assets/img/login-250x250.jpg 250w, ./assets/img/login-300x300.jpg 300w, ./assets/img/login-350x350.jpg 350w, ./assets/img/login-400x400.jpg 400w, ./assets/img/login-450x450.jpg 450w, ./assets/img/login-500x500.jpg 500w, ./assets/img/login-550x550.jpg 550w, ./assets/img/login-574x574.jpg 574w, ./assets/img/login-267x267.jpg 267w, ./assets/img/login-300x300.jpg 300w, ./assets/img/login-224x224.jpg 224w, ./assets/img/login-254x254.jpg 254w, ./assets/img/login-304x304.jpg 304w, ./assets/img/login-344x344.jpg 344w, ./assets/img/login-464x464.jpg 464w, ./assets/img/login-484x484.jpg 484w, ./assets/img/login-614x614.jpg 614w" sizes="(min-width: 2500px) 614px, (min-width: 2000px) 484px, (min-width: 1920px) 464px, (min-width: 1440px) 344px, (min-width: 1280px) 304px, (min-width: 1080px) 254px, (min-width: 960px) 224px, (min-width: 720px) 300px, (min-width: 640px) 267px, (min-width: 574px) 574px, (min-width: 550px) 550px, (min-width: 500px) 500px, (min-width: 450px) 450px, (min-width: 400px) 400px, (min-width: 350px) 350px, (min-width: 300px) 300px, (min-width: 250px) 250px, (min-width: 200px) 200px, 150px" src="./assets/img/login.jpg" class="col-12 col-sm-5 col-md-3 px-0 pl-md-0 pr-md-3 banner-img" alt="Login de usuário - cadastre-se e tenha acesso à versão de demonstração da agilmindset">
    <div class="col-12 col-sm-7 col-md-9 p-4">
      <h1 class="">Login<br /><span class="box">Entre e aproveite todos os módulos de demonstração</span></h1>
      <p class="">Lembre-se: ao utilizar nossa versão de demonstração o usuário está ciente e de acordo com nossas <a href="politicas-de-privacidade" target="_blank" rel="noopener noreferrer" title="Leia nossas políticas de privacidade">Políticas de Privacidade</a> e <a href="termos-de-uso" target="_blank" rel="noopener noreferrer" title="Leia nossos Termos de Uso">Termos de Uso</a> do site. Se houver alguma dúvida, basta <a href="mailto:webmaster@agilmindset.com?subject=Contato%20via%20site%20agilmindset&body=Gostaria%20de%20maiores%20informações%20sobre..." title="Enviar email para webmaster@agilmindset.com" rel="noopener noreferrer" target="_blank">entrar em contato com a gente</a>, estaremos à disposição para te ajudar!</p>
    </div>
  </article>
  <article class="col-12 row mx-auto px-4">
    <form class="mt-0 mb-3 mx-auto" action="" method="post" autocomplete="off" id="formLoginUsuario">
      <div class="form-row">
        <div class="form-group col-12 col-sm-6">
          <label for="inputEmail">Email</label>
          <input type="text" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="fulano@dasilva.com" required tab-index="0" autocomplete="off" autofocus>
          <small id="emailHelp" class="form-text text-secondary">Insira seu email</small>
        </div>
        <div class="form-group col-12 col-sm-6">
          <label for="inputSenha">Senha</label>
          <input type="password" class="form-control" id="inputSenha" name="inputSenha" aria-describedby="senhaHelp" placeholder="********" required tab-index="1" autocomplete="off">
          <small id="senhaHelp" class="form-text text-secondary">Clique <a href="mailto:webmaster@agilmindset.com?Subject=agilmindset%20-%20Redefinir%20senha%20-%20<?php echo date('d/m/Y') ?>" target="_blank" rel="noopener, noreferer" title="Enviar email solicitando nova senha">aqui</a> se esqueceu a senha.</small>
        </div>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" value="true" id="aceitePoliticasFormLogin" name="aceitePoliticasFormLogin" tab-index="2" required checked>
        <label class="form-check-label" for="aceitePoliticasFormLogin">Estou de acordo com as <a href="politicas-de-privacidade" target="_blank" rel="noopener, noreferer" title="Leia nossas Políticas de Privacidade">Políticas de Privacidade</a> e <a href="termos-de-uso" target="_blank" rel="noopener, noreferer" title="Leia nossos Termos de Uso">Termos de Uso</a> do site.</label>
      </div>
      <button type="submit" class="btn btn-dark float-right" value="loginUsuario" title="Enviar informações para login">Login</button>
    </form>
    <p class="col-12 mt-3 text-center">Opa! Ainda não tenho conta, preciso <a href="cadastrar-usuario" rel="next" title="Cadastre-se">me cadastrar</a></p>
  </article>
</div>