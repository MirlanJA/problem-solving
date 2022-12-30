<?php
/*
Given a rectangular matrix of characters, add a border of asterisks(*) to it.

Example

For

picture = ["abc",
           "ded"]
the output should be

solution(picture) = ["*****",
                      "*abc*",
                      "*ded*",
                      "*****"]
*/
function solution($picture)
{
    $asterisksTotal = max(array_map('strlen', $picture)) + 2;
    
    for ($i = 0; $i < count($picture); $i++) {
        $border = str_repeat('*', ($asterisksTotal - strlen($picture[$i])) / 2);
        $picture[$i] = sprintf("%s{$picture[$i]}%s", $border, $border);
    }

    array_unshift($picture, str_repeat('*', $asterisksTotal));
    array_push($picture, str_repeat('*', $asterisksTotal));

    return $picture;
}