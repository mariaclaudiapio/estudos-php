<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

echo ("*** Resultado da função 'array_diff': ***" . PHP_EOL);
var_dump(array_diff($notasBimestre1, $notasBimestre2)); //"array_diff" retorna um novo array, com os valores do primeiro array que não estão no segundo

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'Vinicius' => 7,
    'João' => 8,
    'Ana' => 10,
    'Maria' => 9,
];

echo ("*** Resultado da função 'array_diff_key': ***" . PHP_EOL);
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
    'Maria' => 10,
];

echo ("*** Resultado da função 'array_diff_assoc': ***" . PHP_EOL);
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); 

$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$array3 = [1, 7, 3];

$diferenca = array_diff($array1, $array2, $array3);
var_dump($diferenca);

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [    
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,   
];

echo ("*** Resultado da função 'array_Keys': ***" . PHP_EOL);
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes));
var_dump(array_values($alunosFaltantes));

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);
var_dump(array_combine($notasAlunos, $nomesAlunos)); //para utilizar o array combine, ambos arrays devem ter o mesmo tamanho
var_dump(array_flip($alunosFaltantes));
