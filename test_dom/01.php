<?php

function findShortestVector(array $vectors) : array
{
    $shortestVector = $vectors[0];
    $shortestLength = sqrt(pow($vectors[0][0], 2) + pow($vectors[0][1], 2) + pow($vectors[0][2], 2));
    for ($i = 1; $i < count($vectors); $i++) {
        $length = sqrt(pow($vectors[$i][0], 2) + pow($vectors[$i][1], 2) + pow($vectors[$i][2], 2));
        if ($length < $shortestLength) {
            $shortestVector = $vectors[$i];
            $shortestLength = $length;
        }
    }
    return $shortestVector;
}

$vectors = [[1, 1, 1], [2, 2, 2], [3, 3, 3]];
print_r(findShortestVector($vectors));


/* Write a function that takes  an array of 3D vectors and returns the shortest one. Each vector is represented with an array that contains 3 elements (x,y,z). if multiple vector have same lenght, the function shoud return any of them.
to determinate the length of a vector use the formula: √ x^2 + y^2+ z^2
For example, for the array 3D vector [[1,1,1], [2,2,2], [3,3,3]] findShortestVector should  return the fist vector ([1,1,1]) because is the shortest
 */