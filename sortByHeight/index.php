<?php
/*
Some people are standing in a row in a park. 
There are trees between them which cannot be moved. 
Your task is to rearrange the people by their heights in a non-descending order without moving the trees. 
People can be very tall!

Example

For a = [-1, 150, 190, 170, -1, -1, 160, 180], the output should be
solution(a) = [-1, 150, 160, 170, -1, -1, 180, 190].
*/
function solution($a)
{
    $arr = array_filter($a, function($i) {
        return $i > 0;
    });
    
    sort($arr);
    
    foreach($a as $k => $v) {
        if ($v < 0) {
            continue;
        }
        
        $a[$k] = array_shift($arr);
    }
    
    return $a;
}