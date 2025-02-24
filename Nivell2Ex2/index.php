<?php
require_once('Car.php');

$car = new Car("Ford", "8463LLS", "Gasoline", 230);
echo $car;
$car->boost();
?>