<?php


require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);

echo $bicycle->forward();
echo '<br>';
echo $bicycle->brake();
echo '<br><br>';
var_dump($bicycle);

echo '<br><br>';

$car = new Car('green', 4, 'electric');

echo $car->forward();
echo '<br>';
echo $car->brake();
echo '<br><br>';

var_dump($car);

echo '<br><br>';

var_dump(Car::ALLOWED_ENERGIES);

echo '<br><br>';

$truck = new truck ('red',4, 'electric', 900 ); 

echo $truck->forward();
echo '<br>';
echo $truck->brake();
echo '<br><br>';
var_dump($truck);
echo '<br><br>';
echo $truck->getEnergyLevel();





?>
