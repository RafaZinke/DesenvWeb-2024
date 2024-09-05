function calcularMediaPorSemestre() {
    const tabela = document.querySelector('table');
    const linhas = tabela.rows;

    // Verifica se já existe a linha de "Média por Semestre"
    if (linhas[linhas.length - 1].cells[0].textContent === 'Média por Semestre') {
        return; // Se já tiver, sai da função
    }

    // Cria nova linha e insere a média
    let novaLinha = tabela.insertRow(-1);
    novaLinha.insertCell(0).textContent = 'Média por Semestre';

    for (let i = 1; i < linhas[2].cells.length; i++) {
        let soma = 0;
        let count = 0;
        for (let j = 2; j < linhas.length - 1; j++) {
            let valor = parseFloat(linhas[j].cells[i].textContent);
            if (!isNaN(valor)) {
                soma += valor;
                count++;
            }
        }
        let media = (soma / count).toFixed(2);
        novaLinha.insertCell(i).textContent = media;
    }
}

function calcularMediaPorAluno() {
    const tabela = document.querySelector('table');
    const linhas = tabela.rows;

    // Verifica se já existe a coluna de "Média"
    if (linhas[1].cells[linhas[1].cells.length - 1].textContent === 'Média') {
        return; // Se já tiver, sai da função
    }

    // Adiciona o título "Média" no cabeçalho
    linhas[1].insertCell(-1).textContent = 'Média';

    // Adiciona a média em cada linha de aluno
    for (let i = 2; i < linhas.length; i++) {
        let soma = 0;
        let count = 0;
        for (let j = 1; j < linhas[i].cells.length; j++) {
            let valor = parseFloat(linhas[i].cells[j].textContent);
            if (!isNaN(valor)) {
                soma += valor;
                count++;
            }
        }
        let media = (soma / count).toFixed(2);
        linhas[i].insertCell(-1).textContent = media;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    let btnMediaSemestre = document.createElement('button');
    btnMediaSemestre.textContent = 'Adicionar Média por Semestre';
    btnMediaSemestre.onclick = calcularMediaPorSemestre;
    document.body.appendChild(btnMediaSemestre);

    let btnMediaAluno = document.createElement('button');
    btnMediaAluno.textContent = 'Adicionar Média por Aluno';
    btnMediaAluno.onclick = calcularMediaPorAluno;
    document.body.appendChild(btnMediaAluno);
});
