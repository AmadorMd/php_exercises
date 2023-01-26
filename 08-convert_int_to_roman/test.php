<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $symbols = ['I', 'V', 'X', 'L', 'C', 'D', 'M'];
        $values =  [1, 5, 10, 50, 100, 500, 1000];
        $array_values = [];
        $result = 0;
        for($i = 0; $i < strlen($s); $i ++){
            for($j = 0; $j < count($symbols); $j ++){
                if($s[$i] == $symbols[$j]){
                    $array_values[$i] = $values[$j];
                }
            }
        }
        for($i = 0; $i < count($array_values); $i ++){
            $nextValue = isset($array_values[$i + 1])?$array_values[$i + 1]:0;
            if($array_values[$i] >= $nextValue){
                $result += $array_values[$i];
            }else{
                $result -= $array_values[$i];
            }
        }
        return $result; 
    }
}

$solucion = new Solution;
var_dump($solucion->romanToInt('III'));