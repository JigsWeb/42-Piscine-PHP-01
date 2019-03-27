#!/usr/bin/php
<?php

if ($argc > 1) {
    $res = [];
    foreach($argv as $i => $v)
        if($i)
            $res = array_merge($res, explode(" ", preg_replace('/ +/', ' ', trim($v))));
    usort($res, function($a, $b) {
        $a = strtolower($a);
        $b = strtolower($b);
        $order = "abcdefghijklmnopqrstuvwxyz0123456789";
        $a_split = str_split($a);
        foreach ($a_split as $i => $v) {
            if ($v === $b[$i])
                continue ;
            $p = [strpos($order, $v), strpos($order, $b[$i])];
            if ($p[0] === FALSE && $p[1] === FALSE)
                return strcmp($a, $b);
            if (in_array(FALSE, $p))
                return $p[0] === FALSE ? 1 : -1;
            return (($p[0] > $p[1]) ? 1 : -1);
        }
    });
    foreach($res as $v)
        echo "$v\n";
}