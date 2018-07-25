<?php

function frogJmp($x, $y, $length)
{
    return (int) ceil(($y - $x) / $length);
}

$testSets = [
    [10, 85, 1],
    [15, 150, 20],
    [10, 100, 60],
    [10, 85, 50],
    [40, 85, 15],
];

foreach ($testSets as $value) {
    list($x, $y, $length) = $value;
    
    echo sprintf('%s %s %s', $x, $y, $length) . PHP_EOL;
    echo frogJmp($x, $y, $length) . PHP_EOL;
}
