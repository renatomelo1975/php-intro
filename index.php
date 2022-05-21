<?php

$caterias = [];
$caterias[] = 'infantil';
$caterias[] = 'adolescente';
$caterias[] = 'adulto';
$caterias[] = 'idoso';
//print_r($caterias);

$nome = 'Eduardo';
$idade = 50;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($caterias); $i++)
    {
        if($caterias[$i] == 'infantil')
            echo "O nadador ",$nome, " compete na categoria infatil";
    }
}
else if($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($caterias); $i++)
    {
        if($caterias[$i] == 'adolescente')
            echo "O nadador ",$nome, " compete na categoria adolescente";
    }
}
else
{
    for($i = 0; $i <= count($caterias); $i++)
    {
        if($caterias[$i] == 'adulto')
            echo "O nadador ",$nome, " compete na categoria adulto";
    }
}