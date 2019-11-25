<?php

class Car
{
  private $color = 'red';
  private $weight = 2000;
  static public $avaiableColors = [
    'blue', 'green', 'red', 'yellow'
  ];

  static $counter = 0;
  public $myCounter = 0;
  public function __construct()
  {
    $this->myCounter++;
    self::$counter++;
  }
}

$myCar = new Car;
echo Car::$counter . ' ' . $myCar->myCounter . PHP_EOL;
$myCar = new Car;
echo Car::$counter . ' ' . $myCar->myCounter . PHP_EOL;