<?php

$categorias = [];
$categorias[] = infantil ;
$categorias[] = adolescente ;
$categorias[] = adulto ;
$categorias[] = idoso ;
//print_r($categorias);

$nome = "Eduardo";
$idade = 18;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    echo "infantil";
}
else if($idade >= 13 && $idade <= 18)
{
    echo "adolescente";
}
else
{
    echo "adulto";
}
