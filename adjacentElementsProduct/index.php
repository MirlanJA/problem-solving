<?php
/*
Given an array of integers, find the pair of adjacent elements that has the largest product and return that product.

Example

For inputArray = [3, 6, -2, -5, 7, 3], the output should be
solution(inputArray) = 21.

7 and 3 produce the largest product.
*/
function solution($arr)
{
    $start = $end = 1;
    $max = $inputArray[0] * $inputArray[1];
    
    while ($end < count($inputArray) - 1) {
        $max = max([$max, $inputArray[$end] * $inputArray[$start + 1]]);
        $start++;
        $end++;
    }
    
    return $max;
}
