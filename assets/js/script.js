$(document).ready(function(){
    console.log('\nDocument Ready\n\n')
    window.onload = function(){
        console.log('\nWindow Loaded\n\n')
        console.log(
            '\n\n%cbem vindx ao\n\n%cagil%cmindset\n\n%c \n',
            'color: #fff; font-size: 64px; line-height: 84px;font-family: monospace;',
            'background:#192d35; color: #fff; font-size: 72px; line-height: 84px;font-family: monospace;',
            'background:#192d35; color: #adff2f; font-size: 72px; line-height: 84px; font-weight:bolder;font-family: monospace;',
            'background: url("https://agilmindset.com/assets/favicons/console-480x480.jpg"); background-position: center; line-height: 480px; font-size: 873px; color: transparent; text-transform: uppercase;\n\n',
        )
        this.setTimeout(() => {
            console.log(
                '\n\n%cATENÇÃO:\n\n%c\tEsta é uma versão beta, publicada exclusivamente para testes.\n\tSugestões e críticas são sempre muito bem vindas!\n\n\n',
                'background:#ff00ff; color: #000000; font-size: 64px;font-family: monospace;',
                'background:#f8f9fa; color: #ff00ff; font-size: 64px;font-family: monospace;'
            )
            if(localStorage.getItem("aceitePoliticas") !== "aceito") {
                avisoLegal()
            }
        }, 3000)
        const avisoLegal = () => {
            if(localStorage.getItem("aceitePoliticas") !== "aceito") {
                alertContainer = document.createElement('div')
                alertContainer.style = 'background-color: #adff2f; color: #192d35; display: block; position: fixed; left: 0; bottom: 0; z-index:999; transition: all 0.8s ease-in-out; opacity: 1'
                alertContainer.classList.add('container-fluid')
                alertContainer.setAttribute('id', 'alertContainer')
                alertContainer.innerHTML = '<article class="row p-3"><header class="col-12 px-0" style="font-size: 18px;"><h4 class="col-12 pt-4 text-center mx-0">Aviso Importante</h4><div class="col-12 row align-items-center"><p class="col-12 pb-2 text-center mx-0 mb-0"><b>Esse site utiliza cookies para prover uma melhor experiência para você. Ao continuar a navegar nesse site, você está ciente e de acordo com as <a href="politicas-de-privacidade" title="Leia nossas Políticas de Privacidade" rel="noopener noreferrer" target="_blank">Políticas de Privacidade</a> e com os <a href="termos-de-uso" title="Leia nossos Termos de Uso" rel="noopener noreferrer" target="_blank">Termos de Uso</a> do site.</b></p></div><div class="col-12 row align-items-center"><button id="fecharAlertContainer" class="btn btn-dark ml-auto mt-2 mb-4">Ok, estou de acordo</button></div></header></article>'
                document.body.appendChild(alertContainer)
                fecharAlertContainerBtn = document.querySelector('#fecharAlertContainer')
                fecharAlertContainerBtn.addEventListener('click', fecharAlertContainer)
            }
        }
        const fecharAlertContainer = () => {
            if (document.querySelector('#alertContainer')) {
                document.querySelector('#alertContainer').style = 'display: none;'
                localStorage.setItem("aceitePoliticas", "aceito");
            }
            console.log(
                '\n%cStatus do aceite das políticas e termos:\n%c\n\nACEITO\n'+'\n%c\nObrigado!\n',
                'background-color: #f8f9fa; color: #192d35; font-size: 56px; line-height: 64px; font-family: monospace;',
                'background-color: #98fb98; color: #273238; font-weight: bold; font-size: 72px; line-height: 96px; font-family: monospace;',
                'background-color: #f8f9fa; color: #192d35; font-size: 56px; line-height: 64px; font-family: monospace;')
        }
    }
});