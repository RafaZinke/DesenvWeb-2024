function calcularMediaPorSemestre() {
    const tabela = document.querySelector('table');
    const linhas = tabela.rows;

    let novaLinha = tabela.insertRow(-1);
    novaLinha.insertCell(0).textContent = 'Média por Semestre';

    for (let i = 1; i < linhas[2].cells.length; i++) {
        let soma = 0, count = 0;
        for (let j = 2; j < linhas.length - 1; j++) {
            let valor = parseFloat(linhas[j].cells[i].textContent);
            if (!isNaN(valor)) {
                soma += valor;
                count++;
            }
        }
        novaLinha.insertCell(i).textContent = (soma / count).toFixed(2);
    }
}

function calcularMediaPorAluno() {
    const tabela = document.querySelector('table');
    const linhas = tabela.rows;

    if (linhas[1].cells.length < 10) {
        linhas[1].insertCell(-1).textContent = 'Média';
    }

    for (let i = 2; i < linhas.length; i++) {
        let soma = 0, count = 0;
        for (let j = 1; j < linhas[i].cells.length; j++) {
            let valor = parseFloat(linhas[i].cells[j].textContent);
            if (!isNaN(valor)) {
                soma += valor;
                count++;
            }
        }
        linhas[i].insertCell(-1).textContent = (soma / count).toFixed(2);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    let btnMediaSemestre = document.createElement('button');
    btnMediaSemestre.textContent = 'Adicionar Média por Semestre';
    btnMediaSemestre.onclick = calcularMediaPorSemestre;
    document.body.appendChild(btnMediaSemestre);

    let btnMediaAluno = document.createElement('button');
    btnMediaAluno.textContent = 'Adicionar Média por Aluno';
    btnMediaAluno.onclick = calcularMediaPorAluno;
    document.body.appendChild(btnMediaAluno);
});
