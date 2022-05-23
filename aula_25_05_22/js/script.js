var botao = document.getElementById('botao')
var lamp = document.getElementById('Lampada')

botao.onclick = function(){
    if(botao.value == 'Acender'){
        lamp.src = './img/acesa.png'
        botao.value = 'Apagar'
        botao.innerHTML = 'Apagar'
    }else{
        lamp.src = './img/apagada.png'
        botao.value = 'Acender'
        botao.innerHTML = 'Acender'
    }
}