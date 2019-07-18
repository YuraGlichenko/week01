<?php
$bmv = array('model' => 'X6', 'speed' => 320, 'doors' => 5, 'year' => 2019);
$toyota = array('model' => 'camry', 'speed' => 220, 'doors' => 4, 'year' => 2010);
$opel = array('model' => 'tigra', 'speed' => 180, 'doors' => 3, 'year' => 2018);

$cars = array('bmv' => $bmv, 'toyota' => $toyota, 'opel' => $opel);

foreach ($cars as $k => $value) {
    echo "CAR $k <br />";

    foreach ($value as $v) {
        echo " $v";
    }

    echo '<br />';
}
