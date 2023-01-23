<?php
function solution($prices, $notes, $x) {
    $amount = 0;
    for($i = 0; $i < count($notes); $i++){
        $wordsExplode = explode(" ", $notes[$i]);
        foreach($wordsExplode as $word){
            $percentage = floatval(trim($wordsExplode[0], '%'));
            
            if($word == "lower"){
                $amountDiscounted = ($prices[$i] * $percentage)/(100 - $percentage);
                $amount -= $amountDiscounted;
            }else if($word == "higher"){
                //return  ($prices[$i] - (float)substr($notes[$i],0,5))/100;
                $amountOverall = ($prices[$i] * $percentage)/(100 + $percentage);
                $amount += $amountOverall;
            }
        }
    }
   
    if($amount <= $x){
        return true;
    }else{
        return false;
    }
}

var_dump(solution(
    [24.42, 24.42, 24.2424, 85.23],
    ["13.157% higher than in-store", 
    "13.157% lower than in-store", 
    "Same as in-store", 
    "19.24% higher than in-store"],
    24.24
));