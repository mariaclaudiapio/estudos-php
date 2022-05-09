<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patrícia',
    'Nico',
    'Kilderson',
    'Daiane',
];

echo ("*** usando a função array merge ***");
var_dump($alunos2022 = array_merge($alunos2021, $novosAlunos)); //O 'array merge' une dois arrays. Se a chave não for do tipo string e se repetir no segundo array, ele sobrescreve o valor do segundo array (o primeiro valor da chave repetida não entra no novo array gerado).

$alunos2021 = [
    0 => 'Vinicius',
    1 => 'João',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria',
];

$novosAlunos = [
    5 => 'Patrícia',
    6 => 'Nico',
    7 => 'Kilderson',
    8 => 'Daiane',
];

echo ("*** usando o sinal '+' ***");
$alunos2022 = $alunos2021 + $novosAlunos; 
var_dump($alunos2022);

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patrícia',
    'Nico',
    'Kilderson',
    'Daiane',
    'Shakira',
    'Calipsooooonnn',
];

echo ("*** usando o sinal '+' ***");
$alunos2022 = $alunos2021 + $novosAlunos; //se não houver as chaves declaradas, os valores de chaves repetidos são ignorados.
var_dump($alunos2022);

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patrícia',
    'Nico',
    'Kilderson',
    'Daiane',    
];

echo ("*** usando o spread '...' ***");
$alunos2022 = [...$alunos2021, 'Maria Cláudia',...$novosAlunos]; 
var_dump($alunos2022);