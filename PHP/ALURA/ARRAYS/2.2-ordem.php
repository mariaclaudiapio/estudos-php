<?php

$notas = [
    10,
    8,
    9,
    7
];

sort($notas); //a função sort ordena os itens de um array. Ela modifica as variáveis que passamos para ela.

var_dump($notas);

echo '*** Exemplo 02 ***' . PHP_EOL;

$numeros = [
    'um',
    'dois',
    'três'
];

sort($numeros); //quando se trata de strings, a função sort ordena os itens em ordem alfabética

var_dump($numeros);

echo '*** Exemplo 03 ***' . PHP_EOL;

$numeros = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
    [
        'aluno' => 'Yu',
        'nota' => 8
    ],    
];

function ordenaNotas(array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0;
}

  

usort($numeros, 'ordenaNotas'); //o usort ordena arrays, em ordem decrescente, com o elemento que queremos que ele ordene. Ela recebe dois parâmetros, o elemento que queremos que ele ordene, deve constar entre colchetes. 

var_dump($numeros);