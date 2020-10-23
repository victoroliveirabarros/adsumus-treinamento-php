<?php

// function ola($texto = "mundo", $periodo = "Bom dia"){
//     return "Olá $texto! $periodo<br>";
// }

// echo ola();
// echo ola("Julia", "Boa Noite");


// function ola(){
//     $argumentos = func_get_args();

//     return $argumentos;
// }

// var_dump(ola("Bom dia", 10, date('Y-m-d')));

$a = 10;

function trocaValor($b){
    $b += 50;

    return $b;
}

echo trocaValor($a);
echo "<br>";

?>