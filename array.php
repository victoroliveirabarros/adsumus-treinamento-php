<?php
$frutas = array("Laranja", "Manga", "Morango"); //Para chamar a Laranja: $frutas[0]
$frutas2 = ["Fruta1" => "Açai", "Fruta2" => "Caju", "Fruta3" => "Melancia"]; //Array KEY => VALUE -- Para chamar o Açai: $frutas2['Fruta1']

// for($i=0; $i<3; $i++){
//     echo $frutas[$i];
// }
// foreach($frutas2 as $key=>$value){
//     echo $value;
// }

// echo $frutas2['Fruta1'];

$pessoas = array();

array_push($pessoas, array("nome"=>"Victor", "idade"=>22));
array_push($pessoas, array("nome"=>"Lara", "idade"=>21));
array_push($pessoas, array("nome"=>"Neno", "idade"=>24));

print_r($pessoas);


?>
