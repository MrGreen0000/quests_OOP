<?php



require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);

echo $bicycle->forward();

var_dump($bicycle);
echo '<br><br>';

require_once ('Car.php');
$car = new Car('green', 4, 'electric');

echo $car->forward();

var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);
echo '<br><br>';

require_once ('Truck.php');
Use Truck as Tk;
$truck = new Tk('Blue', 4, 'diesel fuel');

$truck->setStorageCapacity(34);



var_dump($truck);
var_dump(Truck::ALLOWED_ENERGIES);




?>