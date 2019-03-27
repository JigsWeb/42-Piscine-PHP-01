#!/usr/bin/php
<?php

function ft_split($str) {
    $arr = explode(' ', preg_replace('/ +/', ' ', trim($str)));
    sort($arr);
    return $arr;
}

if ($argc > 1) {
    $arr = ft_split($argv[1]);
    $l = array_pop($arr);
    echo "$l";
    foreach ($arr as $v)
        echo " $v";
    echo "\n";
}