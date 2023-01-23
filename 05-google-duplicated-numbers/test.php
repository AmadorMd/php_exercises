<?php
function solution($a) {
    $occurrences = array();
    foreach ($a as $num) {
        if (isset($occurrences[$num])) {
            return $num;
        } else {
            $occurrences[$num] = true;
        }
        
    }
    
    return -1;
}
var_dump(solution([2, 1, 3, 5, 3, 2]));