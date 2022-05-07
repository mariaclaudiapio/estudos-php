<?php

$notas = [
    10,
    8,
    9,
    7,
    6
];

sort($notas);
var_dump($notas);

echo ('*** ordenando de forma decrescente 👇🏽 ***') . PHP_EOL;
rsort($notas); //o r antes do sort é de reverse
var_dump($notas);

echo ('*** ordenando de forma a manter a chave 👇🏽 ***') . PHP_EOL;

$notas = [
    'Maria' => 10,
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

asort($notas); //o a antes do sort é de associative. Para usar a ordem inversa de ordenação a função é arsort.
var_dump($notas);

echo ('*** ordenando pela chave 👇🏽 ***') . PHP_EOL;

$notas = [
    'Maria' => 10,
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

arsort($notas); //o k antes do sort é de key. Para usar a ordem inversa de ordenação a função é krsort.
var_dump($notas);

