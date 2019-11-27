<?php

class ParentClass
{
  public $prop1 = '1';
  protected $prop2 = '2';
  private $prop3 = '3';
  const MY_CONST = '123';
  public function getProp2()
  {
    return $this->prop2;
  }
  // type hint example 
  public function getProp2WithTypeHint(): string
  {
    return $this->prop2;
  }
}

class ChildClass extends ParentClass
{
  public $prop1 = '11';
  protected $prop2 = '22';

  const MY_CONST = '1234';
  public function getProp2()
  {
    $result = parent::getProp2();
    return 'Something: ' . $result;
  }
  public function getProgetProp2WithTypeHintp2(): string
  {
    $result = parent::getProp2();
    return 'Something: ' . $result;
  }
}

$obj = new ChildClass;
echo $obj->getProp2() . PHP_EOL;
echo $obj::MY_CONST . PHP_EOL;