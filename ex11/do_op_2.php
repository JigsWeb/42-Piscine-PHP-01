#!/usr/bin/php
<?php

function get_operator($str) {
    $operators = ['+','-','/','%','*'];
    $str_arr = str_split($str);
    foreach ($operators as $c) {
        if (($operator = in_array($c, $str_arr) ? $c : null))
            break ;
    }
    return $operator;
}

function get_numbers($str, $operator) {
    $p = [trim(strstr($str, $operator, true)), trim(substr(strstr($str, $operator), 1))];
    if (is_numeric($p[0]) && is_numeric($p[1]))
        return $p;
    return NULL;
}

if ($argc == 2) {
    if (!($operator = get_operator($argv[1]))
        || !($numbers = get_numbers($argv[1], $operator)))
        echo "Syntax Error";
    else {
        switch ($operator) {
            case '+':
                $numbers[0] += $numbers[1];
                break ;
            case '-':
                $numbers[0] -= $numbers[1];
                break;
            case '/':
                $numbers[0] /= $numbers[1];
                break;
            case '*':
                $numbers[0] *= $numbers[1];
                break;
            case '%':
                $numbers[0] %= $numbers[1];
                break;
        }
        echo strval($numbers[0]);
    }
} else {
    echo "Incorrect Parameters";
}