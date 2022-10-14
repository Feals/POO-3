<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Camion.php';
require_once 'HighWay.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bicycle = new Bicycle('blue', 1, 2);
echo $bicycle->forward();
var_dump($bicycle);



$car = new Car('green', 4, 4,'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck ('red', 3, 6, 'fuel', 20, 5);
echo "la camion est " . $truck->getColor() . "<br>" .
     "possède " . $truck->getnbSeats() . " sièges<br>" .
     "fonctionne à ". $truck->getEnergy() . "<br>" .
     "et a une capacité de stockage de  " . $truck->getStorageCapacity() . " m³<br>" . "<br>" .
     "la charge du camion est à " . $truck->getload() . "<br>" .
     "il peut être charger à une vitesse de " . $truck->getSpeedLoading() . " m³ par round<br>" . "<br>" ;
     $truck->loading() ;

echo  "<br><br><br>"  . $truck->forward() . " your speed is " . $truck->getCurrentSpeed() ."km/h <br>" . $truck->brake();

$skate = new Skateboard('black', 0, 4);

$autoroute = new MotorWay();
$rueGénéralDeGaule = new ResidentialWay();
$cheminDeLaCampagnette = new PedestrianWay();



$autoroute->addVehicle($truck);
$autoroute->addVehicle($car);

var_dump($autoroute);

$rueGénéralDeGaule->addVehicle($truck);
$rueGénéralDeGaule->addVehicle($car);
$rueGénéralDeGaule->addVehicle($skate);
$rueGénéralDeGaule->addVehicle($bicycle);

var_dump($rueGénéralDeGaule);

$cheminDeLaCampagnette->addVehicle($skate);
$cheminDeLaCampagnette->addVehicle($bicycle);

var_dump($cheminDeLaCampagnette);

$autoroute->addVehicle($skate);
$autoroute->addVehicle($bicycle);

var_dump($autoroute);

$cheminDeLaCampagnette->addVehicle($truck);
$cheminDeLaCampagnette->addVehicle($car);

var_dump($cheminDeLaCampagnette);