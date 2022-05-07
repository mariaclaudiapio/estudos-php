<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

/* As funções abaixo servem para exibir o tamanho do array */
echo "Total: " . count($array) . PHP_EOL; //função mais utilizada atualmente
echo "Total: " . sizeof($array) . PHP_EOL;
