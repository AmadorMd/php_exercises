<?php
function solution($matrix) {
    $totalPrice = 0; //initialing the total Price in 0s
    $rows = count($matrix);//count the number of rows
    $cols = count($matrix[0]);//count the number of cols
    for ($row = 0; $row < $rows; $row++) { //iterate each row
        for ($col = 0; $col < $cols; $col++) {//iterate each column
            if ($matrix[$row][$col] == 0) { // Validate if any column is equal to 0
                for ($i = $row + 1; $i < $rows; $i++) { //iterate to the next rows.
                    $matrix[$i][$col] = 0;//assing the value of 0 to the column, this only happend if the previus row and column has a 0 as value.
                    /*
                        so every column below any 0 value turn into 0 too.
                    */
                }
            }
        }
    }
    for ($row = 0; $row < $rows; $row++) { //iterate the matrix rows aging with new values set to 0
        for ($col = 0; $col < $cols; $col++) {
            if ($matrix[$row][$col] > 0) { //validate if the column value is bigger than 0
                $totalPrice += $matrix[$row][$col];//if it's true, add the values to totalPrice
            }
        }
    }
    return $totalPrice; //return the total price of rooms that are not hounted
}
var_dump(
solution([
    [1,1,1,0], 
    [0,5,0,1], 
    [2,1,3,10]
]));