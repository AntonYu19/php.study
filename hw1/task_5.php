<?php

$cars = ['BMW' => ['model' => 'X5', 'speed' => '120', 'doors' => '5', 'year' => '2015' ],
    'Toyota' => ['model' => 'Rav4', 'speed' => '110', 'doors' => '4', 'year' => '2010' ],
    'Opel' => ['model' => 'Corsa', 'speed' => '100', 'doors' => '3', 'year' => '2008' ]];

foreach ($cars as $car => $value )
{
    echo 'CAR  ' . $car . '<br>' . implode( '  ', $value) . '<br>'.'<br>';
}