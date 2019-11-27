<?php
class Person
{
  public $name;
  protected $age;
  private $phone;

  public function __construct($name, $age, $phone)
  {
    $this->name = $name;
    $this->age = $age;
    $this->phone = $phone;
  }
  public function hello()
  {
    return "Hello from person";
  }
}

class Employee extends Person
{
  private $salary;

  public function __construct($name, $age, $phone, $salary)
  {
    parent::__construct($name, $age, $phone);
    $this->salary = $salary;
  }
  public function hello()
  {
    return "Hello employee: " . $this->name;
  }
}

$emp = new Employee('Bob', 42, 123321123, 9000);
echo $emp->hello();