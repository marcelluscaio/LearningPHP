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
   return $nota1['nota'] <=> $nota2['nota'];
   
   /* if($nota1['nota'] > $nota2['nota']){
      return 1;
   }
   else if($nota2['nota'] > $nota1['nota']){
      return -1;
   }
   return 0; */
} 

usort(array: $notas, callback: 'ordenaNotas');

/* sort - Ordena
rsort - Ordena decrescente
asort - Ordena mantendo a chave no lugar
arsort - Idem, mas decrescente
ksort - ordena pelas chaves
krsort - idem, mas decrescente 

Array key exists
Is set
in array
in array strict
array_search
array_search strict


array diff
array diff key
array diff assoc

array keys
array values



*/

var_dump($notas) ;
