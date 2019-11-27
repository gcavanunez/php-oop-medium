<?php

class Person
{
  private $name;
  private $phone;
  static $counter = 0;

  public function getPhone()
  {
    return $this->phone;
  }
  public function setPhone($phone)
  {
    $this->phone = $phone;
  }
  public function __construct($name, $phone)
  {
    // echo 'Construct is called ' . PHP_EOL;
    $this->name = $name;
    $this->phone = $phone;
    self::$counter++;
  }
  public function __sleep()
  {
    unset($this->phone);
    return ['name'];
  }
  public function __wakeup()
  {
    echo 'I am wake up';
    self::$counter++;
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
  public static function __callStatic($name, $arguments)
  {
    echo $name . ' static method called';
  }
  public function __invoke()
  {
    echo 'Magic method invoke';
  }
  public function __clone()
  {
    // var_dump($this);
    self::$counter++;
  }
}
$p = new Person('chocho', 123321);
// echo $p->usernam2e;
// $p->kk = '1233';
// echo $p->getMobilePhone();
// echo $p->setMobilePhone(123213);
// Person::hello();
// var_dump(is_callable($p));
// echo $p();
// $serialize = serialize($p);
// $newPerson = unserialize($serialize);
// var_dump($newPerson);
var_dump($p);
$newPerson = clone $p;
echo $newPerson::$counter;