<?php

  class A {
    static $a = 1;

    static public function modified_a(){
      return self::$a + 10;
    }

    public function hello() {
      echo "Hello<br>";
    }
  }

  class B extends A {

    static public function attr_test() {
      return parent::$a;
    }

    static public function method_test() {
      return parent::modified_a();
    }

    public function instance_test() {
      # Referencing to a method present in A.
      parent::hello();
    }

    # Parent becomes usefull when a method or property need to be overritten using a reference value.
    public function hello() {
      echo "*******<br>";
      parent::hello();
      echo "*******<br>";
    }

  }

  echo B::$a . "<br>";
  echo B::modified_a() . "<br>";
  echo B::attr_test() . "<br>";
  echo B::method_test() . "<br>";

  $object = new B();
  $object->instance_test();
  $object->hello();

?>
