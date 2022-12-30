<?php
/*
You are given a two-digit integer n. Return the sum of its digits.

Example

For n = 29, the output should be
solution(n) = 11.
*/
function solution($n)
{
    $arr = str_split($n);
    
    return array_sum($arr);
}