#!/usr/bin/php
<?php
if ($argc === 4) {
    $res = preg_replace('/ +/', ' ', trim($argv[1]));
    $op =  preg_replace('/ +/', ' ', trim($argv[2]));
    $n = preg_replace('/ +/', ' ', trim($argv[3]));
    switch ($op) {
        case '+':
            $res += $n;
            break ;
        case '-':
            $res -= $n;
            break;
        case '/':
            $res /= $n;
            break;
        case '*':
            $res *= $n;
            break;
        case '%':
            $res %= $n;
            break;
    }
    echo strval($res);
} else {
    echo "Incorrect Parameters\n";
}