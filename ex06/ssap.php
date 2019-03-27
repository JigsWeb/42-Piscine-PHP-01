#!/usr/bin/php
<?php

if ($argc > 1) {
    $res = [];
    foreach($argv as $i => $v)
        if($i)
            $res = array_merge($res, explode(" ", preg_replace('/ +/', ' ', trim($v))));
    sort($res);
    foreach($res as $v)
        echo "$v\n";
}