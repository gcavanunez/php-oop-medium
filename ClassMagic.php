<?php

class Person
{
  private $name = 'Kararot';
  private $phone = 1234;

  public function getPhone()
  {
    return $this->phone;
  }
  public function setPhone($phone)
  {
    $this->phone = $phone;
  }
  public function __construct()
  {
    echo 'Construct is called ' . PHP_EOL;
  }
  public function __destruct()
  {
    echo 'Desctruct is called' . PHP_EOL;
  }

  public function __toString()
  {
    return "Name: $this->name. Phone: $this->phone ";
  }
  public function __get($propName)
  {
    if ($propName === 'username') {
      return $this->name;
    }
    return 'Property ' . $propName . ' does not exist';
  }
  public function __set($propName, $value)
  {
    // var_dump($name, $value);
    if ($propName === 'username') {
      $this->name = $value;
    }
  }
  public function __call($name, $arguments)
  {
    // var_dump($name, $arguments);
    if ($name === 'getMobilePhone') {
      return $this->getPhone();
    } else if ($name === 'setMobilePhone') {
      // $this->setPhone($arguments[0]);
      call_user_func_array([$this, 'setPhone'], $arguments);
    }
  }
  public function __callStatic($name, $arguments)
  {
    return $name;
  }
}
$p = new Person;
// echo $p->usernam2e;
// $p->kk = '1233';
echo $p->getMobilePhone();
echo $p->setMobilePhone(123213);