#!/usr/bin/php
<?php

if ($argc > 2) {
    $k = $argv[1];
    for($i = 2; isset($argv[$i]); $i++) {
        if (strstr($argv[$i], ':', true) === $k)
            $res = substr(strstr($argv[$i], ':'), 1);
    }
    echo $res;
}