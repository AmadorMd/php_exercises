<?php
function solution($numbers, $left, $right) {
    $boleans = [];
    for($i = 0; $i < count($numbers); $i++){
        $prodNumber = $i + 1;
        $currentNumber = $numbers[$i];
        for($j = 1; $j <= $right; $j ++){
            $getNumber = $prodNumber * $j;
            if( $getNumber == $currentNumber){
                $boleans[$i] = true;
            }
        }
        if(!isset($boleans[$i])){
            $boleans[$i] = false;
        }
    }
    return $boleans;
}
$numbers = [8, 5, 6, 16, 5];
$right = 3;
$left = 1;
var_dump(solution($numbers, $left, $right));

