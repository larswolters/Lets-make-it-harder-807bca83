<?php

$weights = array_map('intval', explode(',', $argv[3]));
rsort($weights);

if ($argv[1] === $argv[2]) {
    echo 'In balans!';
} else {
    $difference = abs($argv[1] - $argv[2]);
    $load = [];

    foreach ($weights as $weight) {
        if ($weight <= $difference) {
            $load[] = $weight;
            $difference = abs($difference - $weight);
        }
    }

    if ($difference !== 0) {
        echo "Niet in balans!";
    } else {
        sort($load);
        echo implode(',', $load);
    }
}