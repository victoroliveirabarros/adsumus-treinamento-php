<?php 

// function soma(int ...$valores){
//     return array_sum($valores);
// }

// echo soma(2,2,2,2);
// echo "<br>";

// echo soma(1.5, 2.5, 3.2);
// echo "<br>";

function soma(float ...$valores):float{
    return array_sum($valores);
}

echo soma(1.5, 2.5, 3.2);
echo "<br>";

?>