#!/usr/bin/php
<?php

if ($argc > 1) {
    $res = [];
    foreach($argv as $i => $v)
        if($i)
            $res = array_merge($res, explode(" ", preg_replace('/ +/', ' ', trim($v))));
    $e = usort($res, function($a, $b) {
        $a = strtolower($a);
        $b = strtolower($a);
        $order = "abcdefghijklmnopqrstuvwxyz0123456789";
        $c = stristr($order, $a[0]);
        $d = stristr($order, $b[0]);
        var_dump(($a < $b));
        return ($a > $b) ? 1 : -1;
    });
    printf($e);
    foreach($res as $v)
        echo "$v\n";
}