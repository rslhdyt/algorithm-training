<?php

$list = [1,3,5,6,7,8,9,1,3,5,6,7,8,9,2,2,0,4,2,2,0,4];
$lenght = count($list);

do {
    $swapped = false;

    for ($i=0; $i < $lenght - 1; $i++) { 
        if ($list[$i] > $list[$i + 1]) {
            $tmp = $list[$i];
            $list[$i] = $list[$i + 1];
            $list[$i + 1] = $tmp;

            $swapped = true;
        }
    }
} while ($swapped);

print_r($list);