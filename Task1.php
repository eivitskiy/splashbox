<?php

function printBooleanArray($array)
{
    foreach($array as $row) {
        foreach($row as $column) {
            echo (int)$column, "\t";
        }
        echo PHP_EOL;
    }
}

$arr = [
    [true, false, false, true, false],
    [false, true, false, true, false],
    [false, false, true, true, false],
];

printBooleanArray($arr);