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
    $max = $arr[0] * $arr[1];

    for($i = 1; $i < count($arr); $i++) {
        if (!isset($arr[$i + 1]))
            break;
        
        $next = $arr[$i] * $arr[$i + 1];
        $max = max([$next, $max]);
    }

    return $max;
}