<?php

$nome = array ("Kleber","Laion","Daniela","Leal","Matos","Mello","Evaldo","Airton");

echo $nome  [4];

?>

<?php
$numero = array ("0",'1','2','3','4','5','6','7');
echo $numero [4];
?>

<?php 
$matricula = array ("30528145-0","30588361-8","30504872-1","30507530-4", "30526939-3","30505059-0","30309029-3","30387985-9");
$texto = ("A variavel var_dump mostra os dados da variavel, string e etc.  ");
echo $matricula [4];
echo $texto;
echo "<br/>";
$arquivo = fopen("exemplo-01.php", "r");
var_dump($arquivo);
?>

