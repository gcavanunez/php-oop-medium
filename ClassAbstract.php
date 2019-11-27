<?php

abstract class Shape
{
  public $color;
  abstract public function getArea(): float;
  public function __construct($color)
  {
    $this->color = $color;
  }
  public function getColor()
  {
    return $this->color;
  }
}

class Triangle extends Shape
{
  public $base;
  public $height;
  public function __construct(
    $color,
    $base,
    $height
  ) {
    parent::__construct($color);
    $this->base = $base;
    $this->height = $height;
  }
  public function getArea(): float
  {
    return $this->height * $this->base * .5;
  }
}
class Circle extends Shape
{
  public $radius;
  public function __construct($color, $radius)
  {
    parent::__construct($color);
    $this->radius = $radius;
  }
  public function getArea(): float
  {
    return $this->radius * $this->radius * 3.14;
  }
}
class Rectangle extends Shape
{
  public $width;
  public $length;

  public function __construct($color, $width, $length)
  {
    parent::__construct($color);
    $this->length = $length;
    $this->width = $width;
  }
  public function getArea(): float
  {
    return $this->length * $this->width;
  }
}

$rect = new Rectangle('blue', 90, 19);
echo $rect->getArea() . PHP_EOL;