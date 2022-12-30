<?php

/*
Given an integer n, return the largest number that contains exactly n digits.

Example

For n = 2, the output should be
solution(n) = 99.
*/
function solution($n, $m)
{
    $mod = $m % $n;

    if ($mod !== 0) {
        return $m - $mod;
    }
    
    return $m;
}