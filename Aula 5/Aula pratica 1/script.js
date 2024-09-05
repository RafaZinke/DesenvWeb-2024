
const resultado = document.getElementById('Resultado');
const botoes = document.querySelectorAll('.botao');


let expressao = '';


function atualizarVisor(valor) {
    resultado.value = valor;
    
    
    const numero = parseFloat(valor);

    if (numero > 0) {
        resultado.style.backgroundColor = 'lightgreen'; 
    } else if (numero < 0) {
        resultado.style.backgroundColor = 'lightcoral'; 
    } else if (numero === 0) {
        resultado.style.backgroundColor = 'lightgray'; 
    } else {
        resultado.style.backgroundColor = 'white'; 
    }
}


function limparVisor() {
    expressao = '';
    atualizarVisor('');
}


function calcularExpressao() {
    try {
        
        expressao = eval(expressao).toString();
        atualizarVisor(expressao);
    } catch (e) {
        atualizarVisor('Erro');
        resultado.style.backgroundColor = 'white'; 
    }
}


botoes.forEach(botao => {
    botao.addEventListener('click', () => {
        const valorBotao = botao.textContent;

        
        if (valorBotao === 'C') {
            limparVisor();
        }
        
        else if (valorBotao === '=') {
            calcularExpressao();
        }
        
        else {
            expressao += valorBotao;
            atualizarVisor(expressao);
        }
    });
});
