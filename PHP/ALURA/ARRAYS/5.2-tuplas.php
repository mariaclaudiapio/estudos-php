<?php

$dados = [
'nome' => 'Vinicius', 
'nota' => 10, 
'idade' => 24,
];

/*
($nome, $nota, $idade) = $dados;
[$nome, $nota, $idade] = $dados;
*/

extract($dados); //não use essa função com variáveis nas quais você não confia (variáveis que vem da internet, por exemplo)

var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));

