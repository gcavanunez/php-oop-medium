<?php

class Car
{
  private $color = 'red';
  private $weight = 2000;
  public function __construct($color = 'green', $weight = 2500)
  {
    $this->color = $color;
    $this->weight = $weight;
  }
  public function getColor()
  {

    echo $this->color . ' ' . $this->weight;
  }
  public function __destruct()
  {
    echo 'I am destroyed:' . $this->color;
  }
}

$myCar = new Car();
$myCar = new Car('red', '889');

unset($myCar);
sleep(2);