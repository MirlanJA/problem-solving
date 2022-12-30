<?php
/*
Write a function that reverses characters in (possibly nested) parentheses in the input string.

Input strings will always be well-formed with matching ()s.

Example

For inputString = "(bar)", the output should be
solution(inputString) = "rab";
For inputString = "foo(bar)baz", the output should be
solution(inputString) = "foorabbaz";
For inputString = "foo(bar)baz(blim)", the output should be
solution(inputString) = "foorabbazmilb";
For inputString = "foo(bar(baz))blim", the output should be
solution(inputString) = "foobazrabblim".
Because "foo(bar(baz))blim" becomes "foo(barzab)blim" and then "foobazrabblim".
*/
function solution($inputString)
{
    $pattern = '#\([a-zA-Z]*?\)#';

    while (strpos($inputString, '(') !== false) {
        $inputString = preg_replace_callback($pattern, function($matches) {
            $text = trim($matches[0], '()');
            return strrev($text);
        }, $inputString);
    }

    return $inputString;
}
