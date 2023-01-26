<?php
function solution($a) {
    $size = count($a);
    for($row = 0; $row < $size/2; $row ++){
        for($col = $row; $col < $size - $row - 1; $col++){
            $temp = $a[$row][$col];
            $a[$row][$col] = $a[$size - $col - 1][$row];
            $a[$size - $col -1][$row] = $a[$size - $row - 1][$size - $col - 1];
            $a[$size - $row -1][$size - $col - 1] = $a[$col][$size - $row -1];
            $a[$col][$size - $row - 1] = $temp;
        }
    }
    return $a;
}

var_dump(solution(
    [[1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]]));