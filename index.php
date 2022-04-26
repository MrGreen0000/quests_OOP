<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('white', 1, 2);

echo '<br><br>';

var_dump($bike);

echo '<br><br>';

echo $bike->forward();

echo $bike->brake();

echo '<br><br>';

$bike->dump();

echo '<br><br>';

$car = new Car('red', 4, 'Electric');

var_dump($car);

echo '<br><br>';
echo $car->forward();
echo '<br><br>';
echo $car->brake();
echo '<br><br>';
echo $car->start();





?>