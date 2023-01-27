<?php 
function solution($inputArray){
    $maxNumber = 0;
    $bigestStr = [];
    foreach($inputArray as $key => $str){
        if($maxNumber > 0){
            if($maxNumber < strlen($str)){
                $maxNumber = strlen($str);
            }
        }else if($maxNumber == 0){
            $maxNumber = strlen($str);
        }
    }
    foreach($inputArray as $key => $str){
        if(strlen($str) >= $maxNumber){
            $bigestStr[$key] = $str;
        }
    }
    return $bigestStr;
}

var_dump(solution(["aba", "aa", "ad", "vcd", "aba"]));