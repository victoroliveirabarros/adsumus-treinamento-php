<?php 

$nome = "Victor";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    $nome = "Julia";
    echo "Nome de dentro do escopo da função: ".$nome;
}

// teste();

teste2();

?>