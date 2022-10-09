<?php 

require_once 'Car.php';
require_once 'Bicycle.php';

$car1 = new Car('red', 4, "yes");
var_dump($car1);

$car2 = new Car('blue', 5, "no");
var_dump($car2);

$bike1 = new Bicycle('yellow');
var_dump($bike1);

$bike2 = new Bicycle('orange');
var_dump($bike2);
