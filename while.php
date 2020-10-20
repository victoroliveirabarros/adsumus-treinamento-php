<?php

$condicao = true;

while($condicao){
    $numero = rand(1, 10);

    if($numero == 6){
        echo "Seis";
        $condicao = false;
    }
    echo $numero." ";
}

?>