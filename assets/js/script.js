$(document).ready(function(){
    console.log('\nDocument Ready\n\n')
    window.onload = function(){
        console.log('\nWindow Loaded\n\n');
        console.log(
            '\n\n%cbem vindx ao\n\n%cagil%cmindset\n\n%c \n',
            'color: #fff; font-size: 64px; line-height: 84px;font-family: monospace;',
            'background:#192d35; color: #fff; font-size: 72px; line-height: 84px;font-family: monospace;',
            'background:#192d35; color: #adff2f; font-size: 72px; line-height: 84px; font-weight:bolder;font-family: monospace;',
            'background: url("https://agilmindset.com/assets/favicons/console-480x480.jpg"); background-position: center; line-height: 480px; font-size: 873px; color: transparent; text-transform: uppercase;\n\n',
        )
        this.setTimeout(() => {
            console.log(
                '\n\n%cATENÇÃO:\n\n\t%cEsta é uma versão beta, publicada exclusivamente para testes.\n\tSugestões e críticas são sempre muito bem vindas!\n\n\n',
                'background:#ff00ff; color: #ffffff; font-size: 64px;font-family: monospace;',
                'background:#f8f9fa; color: #ff00ff; font-size: 64px;font-family: monospace;'
            )
        }, 4000)
    }
});