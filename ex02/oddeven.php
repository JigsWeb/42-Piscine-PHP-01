#!/usr/bin/php
<?php

function odd()
{
    echo "Entrez un nombre: ";
    if (($line = fgets(STDIN))) {
        $n = trim($line);
        if (!is_numeric($n))
            echo "'$n' n'est pas un chiffre";
        else
            echo "Le chiffre $n est ". (intval($n) % 2 ? "Impair" : "Pair") ."\n";
        odd();
    }
}
odd();