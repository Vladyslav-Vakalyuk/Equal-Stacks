<?php


function equalStacks($h1, $h2, $h3) {
    
    $h1Comb = getAllComb($h1);
    $h2Comb = getAllComb($h2);
    $h3Comb = getAllComb($h3);
    $result = array_intersect($h1Comb, $h2Comb, $h3Comb);
    return max($result);
}

function getAllComb($array){
    $ones = $twos = $array;
    foreach($ones as $one){
    foreach($twos as $two){
    $result[] = $one + $two;
}
}
return $result;
}
