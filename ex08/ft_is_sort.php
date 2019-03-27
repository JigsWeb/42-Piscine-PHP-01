#!/usr/bin/php
<?php

function ft_is_sort($arr) {
    $arr_cpy = $arr;
    sort($arr_cpy);
    return implode(";", $arr_cpy) === implode(";", $arr);
}