<?php

$alunos2021 = [
    'Vinícius',
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

array_push($alunos2021, 'Alice', 'Bob', 'Charlie');
$alunos2021[] = 'Luiz'; //pode ser utilizada quando precisamos adicionar apenas um elemento por vez.
$alunos2021[] = 'Joana';
array_unshift($alunos2021, 'Stephanie', 'Rafaela');//adiciona os nomes ao início do array

echo array_shift($alunos2021) . PHP_EOL; //retira e mostra o primeiro elemento e reordena os demais elementos do array
echo array_pop($alunos2021) . PHP_EOL; //retira e mostra o último elemento e reordena os demais elementos do array

var_dump($alunos2021);