<?php
/*
Given two strings, find the number of common characters between them.

Example

For s1 = "aabcc" and s2 = "adcaa", the output should be
solution(s1, s2) = 3.

Strings have 3 common characters - 2 "a"s and 1 "c".
*/
function solution($s1, $s2)
{
    $count = 0;

    for($i = 0; $i < strlen($s1); $i++) {
        $pos = strpos($s2, $s1[$i]);

        if ($pos !== false) {
            $s2 = substr_replace($s2, '', $pos, 1);
            $count++;
        }
    }

    return $count;
}