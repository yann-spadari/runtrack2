<?php


$string = "Prénom";
$int = 24; 
$float = 1.81; 
$bool = true;

echo "$string <br> Age : $int <br> Taille : $float <br> Vérifié : $bool";


$id_perso = array (
 "prénom" =>  array ("a" => "Manon", "b" => "Yann", "c" => "Gwen"),
 "age" => array ("a" => 23, "b" => 24, "c" => 20),
 "taille" => array ("a" => 1.70,"b" => 1.81,"c" => 1.83)
);

$id = array (
    "Perso1" => array ("prénom" => "Manon", "age" => 23, "taille" => 1.70),
    "Perso2" => array ("prénom" => "Yann", "age" => 24, "taille" => 1.81),
    "Perso3"=> array ("prénom" => "Gwen", "age" => 20, "taille" => 1.83),
);
echo "<br>";

for ($i = 1; $i <= 3; $i++)
var_dump($id["Perso".$i]["taille"]);

