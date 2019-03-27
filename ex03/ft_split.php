#!/usr/bin/php
<?php

function ft_split($str) {
    $arr = explode(' ', preg_replace('/ +/', ' ', trim($str)));
    sort($arr);
    return $arr;
}