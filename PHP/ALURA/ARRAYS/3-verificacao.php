<?php

$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];



/* 
$notas = 1;
if (gettype($notas) === 'array') */ 

if (is_array($notas)) {     //o "is_array" serve para verificar se um elemento é array ou não.
    echo "Sim, é um array." . PHP_EOL;
} else {
    echo "Não, não é um array." . PHP_EOL;
}

$array = [
    0 => 'um',
    1 => 'dois',
    2 => 'três',
];

var_dump(array_is_list($array)); //a função "array_is_list" serve para verificar se o array tem chaves numéricas e crescentes. 

var_dump(array_key_exists('Nicolau', $notas)); //o "array_key_exists" verifica se um índice existe.

var_dump(isset($notas['Ana'])); //o "isset" verifica se uma chave existe e se ela não é nula. 

echo "*** Alguém tirou 10? ***" . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo "*** Alguém tirou 0? ***" . PHP_EOL;
var_dump(in_array(0, $notas)); //"in-array" verifica se o valor existe

echo "*** Quem tirou 10? ***" . PHP_EOL;
echo array_search(10, $notas) . PHP_EOL;

echo "*** Quem tirou 0? ***" . PHP_EOL;
echo array_search(0, $notas) . PHP_EOL;

echo "*** Quem tirou 11? ***" . PHP_EOL;
var_dump(array_search(11, $notas));