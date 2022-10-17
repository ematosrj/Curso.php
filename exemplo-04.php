<?php

echo "<p>Exercicio escopo e variavel super global</p>";

$nome = "Enes da Silva Matos ";


function teste () {

global $nome;
echo $nome;


}

function teste2 () {

$nome = "João";

echo $nome." agora no teste2";


}

teste();

teste2();





?>