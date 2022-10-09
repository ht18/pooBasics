<?php 

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Vehicle.php';

$truck1 = new Truck('orange', 4, 'yes', 400);
var_dump($truck1);
$truck1->setStorage(500);
$newStorage = $truck1->getStorage();
$newStorageCapacity = $truck1->getStorageCapacity();
var_dump($truck1);

echo $truck1->isFull($newStorage, $newStorageCapacity);
