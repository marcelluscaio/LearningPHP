<?php

$notas = [
   10,
   9,
   8,
   6,
   5,
   4,
   3,
   2,
   7
];

$notas_ordenadas = $notas;
sort($notas_ordenadas);
echo 'notas';
var_dump($notas);

echo 'notas';
var_dump($notas_ordenadas);

$notas = [ 
   ['Aluno' => 'Maria', 'nota' => 8], 
   ['Aluno' => 'Ana', 'nota' => 5]
];


function ordenaNotas(array $nota1, array $nota2) :int{
   if($nota1['nota'] > $nota2['nota']){
      return 1;
   }
   else if($nota2['nota'] > $nota1['nota']){
      return -1;
   }
   return 0;
} 

usort(array: $notas, callback: 'ordenaNotas');

var_dump($notas) ;

/* $nota_especifica = $notas.find(7);

function findNota($num){
   $notas.find($num);
}

findNota(8); */
