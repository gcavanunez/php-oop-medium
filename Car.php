<?php

class Car
{
  private $color = 'red';
  public $weight;
  private $year;
  private $availableColors = [
    'red', 'green', 'blue'
  ];

  public function setYear($year)
  {
    $this->year = $year;
  }
  public function getYear()
  {
    return $this->year;
  }
  public function setColor($color)
  {
    if (in_array($color, $this->availableColors)) {

      $this->color = $color;
    }
  }
  public function getColor()
  {
    return $this->color;
  }
}

$myCar = new Car();
$myCar2 = $myCar;
// $myCar2 = clone $myCar;
// var_dump($myCar, $myCar2);
var_dump($myCar === $myCar2);

// $myCar->color = 'blue';
// $myCar->setYear(2019);

// echo $myCar->color;
// echo $myCar->getYear();