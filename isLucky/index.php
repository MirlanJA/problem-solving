<?php
/*
Ticket numbers usually consist of an even number of digits.
A ticket number is considered lucky if 
the sum of the first half of the digits is equal to the sum of the second half.

Given a ticket number n, determine if it's lucky or not.

Example

For n = 1230, the output should be
solution(n) = true;
For n = 239017, the output should be
solution(n) = false.
*/
function solution($n)
{
    $numberArray = array_map('intval', str_split($n));
    $count = count($numberArray);

    if ($count % 2 != 0) {
        return false;
    }

    $middle = $count / 2;
    $firstPart = array_slice($numberArray, 0, $middle);
    $secondPart = array_slice($numberArray, $middle);

    return array_sum($firstPart) == array_sum($secondPart);
}