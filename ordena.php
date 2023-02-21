<?php

$notas = [
   10,
   9,
   8,
   7,
   6,
   5,
   4,
   3,
   2
];

$notas_ordenadas = $notas.sort();

$nota_especifica = $notas.find(7);

function findNota($num){
   $notas.find($num);
}

findNota(8);

var_dump($notas);
var_dump($notas_ordenadas);
var_dump($nota_especifica);