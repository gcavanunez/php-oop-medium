<?php
class Car
{
  public $color;
  public $manufacturer;
  const MY_CONSTANT = 1;
  const MANUFACTURER_BMW = 'BMW';
  const MANUFACTURER_TESLA = 'TESLA';
  const MANUFACTURER_MERCEDES = 'mercedes';

  const COLOR_GREEN = 'green';

  public function __construct($color, $manufacturer)
  {
    $this->color = $color;
    $this->manufacturer = $manufacturer;
  }
  public function myTestFunc()
  {
    self::MY_CONSTANT;
  }
}

class Math
{
  const PI = 3.14;
}

Car::MY_CONSTANT;

$myCar = new Car('orange', 'ford');
var_dump($myCar);

$mySecondCar = new Car(Car::COLOR_GREEN, Car::MANUFACTURER_MERCEDES);
var_dump($mySecondCar);