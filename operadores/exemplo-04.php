<?php

$a = 55.0;

$b = 55;

var_dump($a > $b);

echo "<br>";   # Letra variavel a = 30 , maior que 55 retorna falsa.

var_dump($b > $a);

echo "<br>";  # variavel b retorna verdadeiro.

# Igual de atribuição e igual de comparação.

var_dump($a = $b);
echo "<br>"; 
var_dump($a == $b);
echo "<br>"; 
var_dump($a === $b);
echo "<br>"; 

var_dump($a != $b);

echo "<br>"; 

var_dump($a !== $b);


?>