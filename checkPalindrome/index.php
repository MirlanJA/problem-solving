<?php
/*
Given the string, check if it is a palindrome.

Example

For inputString = "aabaa", the output should be
solution(inputString) = true;
For inputString = "abac", the output should be
solution(inputString) = false;
For inputString = "a", the output should be
solution(inputString) = true.
*/
function solution($str)
{
    $str = strtolower($str);
    $reverse = array_reverse(str_split($str));

    return $str == implode($reverse);
}