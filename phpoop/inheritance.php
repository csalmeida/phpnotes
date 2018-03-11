<?php

  class Car {
    var $wheels = 4;
    var $doors = 4;

  public function wheelsdoors() {
      return $this->wheels + $this->doors;
    }
  }

  # It inherits all attributes and methods from Car class.
  class CompactCar extends Car {
    # Overrides the inheritance value.
    var $doors = 2;
  }

  class Example {
    public $a = 1;
    protected $b = 2;
    private $c = 3;

  public function show_abc() {
      echo $this->a;
      echo $this->b;
      echo $this->c;
    }
  }

  class SmallExample extends Example {

  }

  class SetterGetterExample {
    private $a = 1;

    public function get_a() {
      return $this->a;
    }

    public function set_a($value) {
      return $this->a = $value;
    }
  }

  $car1 = new Car();
  $car2= new CompactCar();

  $example = new Example();
  $small_example = new SmallExample();

  $setter_getter = new SetterGetterExample();

  echo $car1->wheels . "<br>";
  echo $car1->doors . "<br>";
  echo $car1->wheelsdoors() . "<br>";

  echo $car2->wheels . "<br>";
  echo $car2->doors . "<br>";
  echo $car2->wheelsdoors() . "<br>";

  echo "public a: {$example->a} <br>";
  //echo "protected b: {$example->b} <br>";
  //echo "private c: {$example->c} <br>";

  echo "public a: {$small_example->a} <br>";
  //echo "protected b: {$small_example->b} <br>";
  //echo "private c: {$small_example->c} <br>";

  //$example->show_abc();
  //$small_example->show_abc();

  echo "{$setter_getter->get_a()}<br>";
  echo "{$setter_getter->set_a(15)}<br>";


?>
