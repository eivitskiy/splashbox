<?php

/**
 * @param array $array
 * @param int $lines
 */
function printBooleanArray(array $array, int $lines)
{
    $columns = intval(count($array) / $lines);

    if(count($array) % $lines < ($lines - 1)) {
        /*
         * здесь нужно поместить обработчик ошибки, т.к.
         * мы столкнулись с ситуацией когда строк в массиве слишком много
         * т.е. если добавить ещё одну колонку - мы получим пустые строки,
         * если же не добавлять - получаем недостаточное количество строк
         */
        exit('слишком много строк' . PHP_EOL);
    }

    if(count($array) % $lines) {
        $columns++;
    }

    foreach($array as $k => $v) {
        if($k > 0 && $k % $columns == 0) {
            echo PHP_EOL;
        }
        echo (int)$v, "\t";
    }

    echo PHP_EOL;
}

$arr = [
    false,
    false,
    false,
    false,
    false,
    false,
    true,
    true,
    true,
    true,
    false
];

printBooleanArray($arr, 4);