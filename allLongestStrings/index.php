<?php
/*
Given an array of strings, return another array containing all of its longest strings.

Example

For inputArray = ["aba", "aa", "ad", "vcd", "aba"], the output should be
solution(inputArray) = ["aba", "vcd", "aba"].
*/
function solution($inputArray)
{
    $result = [];
    $lengthArray = array_map('strlen', $inputArray);
    $max = max($lengthArray);
    
    for ($i = 0; $i < count($inputArray); $i++) {
        if (strlen($inputArray[$i]) < $max) {
            continue;
        }
        
        $result[] = $inputArray[$i];
    }
    
    return $result;
}