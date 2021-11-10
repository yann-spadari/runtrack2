<?php

$str="Tous ces instants
seront perdus dans le temps comme les larmes sous la pluie";

$char=0;

while ($char < 100){
    if ($char%2){
        $str[$char] = ' ';
    }

    $char= $char + 1;
}

echo $str

?>