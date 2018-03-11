<?php
  # Template for an object.
  # Usually named in camelCase.
  class User {
    // Creation of atributes.
    var $first_name;
    var $last_name;

    var $arm_count = 2;
    var $leg_count = 2;

    // Creation of a property.
    public $age = 0;

    # Don't know what this does.
    public function __construct() {
    } // End of function __construct.

    # Creation of a method.
    public function sayHello() {
      # $this refers to the current instance of the class.
      echo "Hello from inside the class " . get_class($this) . ".<br>";
    }

    public function fullName() {
       return $this->first_name . " " . $this->last_name;
    }

  } // End of class User

  # Instantiates of an object.
  $person = new User();
  $person2 = new User();

  # Calling a method from an object.
  # $person->sayHello();

  # Calling an attribute of an object.
  # It knows the difference between a method and attribute since here the parenthesis are absent.
  // echo $person->arm_count;

  # Values can be assigned to objects variables.
  $person->first_name = "Keira";
  $person->last_name = "Metz";

  echo $person->fullName() . "<br>";


  # DEBUGGING

  # Lists all classes.
  //$classes = get_declared_classes();
  /*foreach ($classes as $class) {
    echo $class . "</br>";
  }*/

  #Show class is defined.
  /*if (class_exists('User')) {
    echo "Class has been defined.";
  } else {
    echo "Class does NOT exist!";
  }*/

  #Lists all defined methods for a class.
  /*$methods = get_class_methods('User');
  foreach ($methods as $method) {
    echo $method . "</br>";
  }*/

  #Show if method is defined.
  /*
  if (method_exists('User', 'sayHello')) {
    echo "Method has been defined.";
  } else {
    echo "Method does NOT exist!";
  }
  */


  # Get name of the class.
  /*
  echo get_class($person) . "<br>";

  # Check is class is the one you think it is.
  if (is_a($person, 'User')) {
    echo "Yes! It's a user.";
  } else {
    echo "Nope. Not a user.";
  }*/

  # Check if specific property exists.
  //echo property_exists('User', 'first_name') ? "true" : "false";

  # Check if any attributes have been defined.
  /*
  $vars = get_class_vars('User');
  foreach ($vars as $var => $value) {
    echo "{$var}: {$value}</br>";
  }
  */
  ?>
