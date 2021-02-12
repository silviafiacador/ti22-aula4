document.querySelector('#confirmarsenha').addEventListener('blur',()=>{
    let senha=document.getElementById('senha').value;
    let confirmarsenha=document.getElementById('confirmarsenha').value;

    // comparando-se as senhas
    if (senha===confirmarsenha) {
        document.getElementById('senha').style.borderColor='green';
        document.getElementById('confirmarsenha').style.borderColor='green';
        document.getElementById('enviar').disabled=false;
    }
    else {
        document.getElementById('senha').style.borderColor='red';
        document.getElementById('confirmarsenha').style.borderColor='red';
        document.getElementById('enviar').disabled=true;
        // limpando os conteúdos dos campos de senha
        document.getElementById('senha').value="";
        document.getElementById('confirmarsenha').value="";
        // jogando o foco para o campo senha
        document.getElementById('senha').focus();
    }
})