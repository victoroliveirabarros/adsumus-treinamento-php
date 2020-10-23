<?php

function salario(){
    return 1045.00;
}

echo "Salario minimo a de: ".salario();

$salarioPessoa = salario()*3;

echo "O salario do fulano e de: ".$salarioPessoa;

?>