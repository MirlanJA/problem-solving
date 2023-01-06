<?php
/*
Given an array of strings, return another array containing all of its longest strings.

Example

For inputArray = ["aba", "aa", "ad", "vcd", "aba"], the output should be
solution(inputArray) = ["aba", "vcd", "aba"].
*/
function solution($inputArray)
{
   $max = max(array_map('strlen', $inputArray));

    return array_values(array_filter($inputArray,
        function($n) use($max) {
            return strlen($n) === $max;
        }
    ));
}
