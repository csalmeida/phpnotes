<?php
  # Template for an object.
  # Usually named in camelCase.
  class User {

    public function __construct() {
    } // End of function __construct.

    // Creation of a method.
    public function sayHello() {
      echo "Hello from inside a class!";
    }

  } // End of class User.


  $methods = get_class_methods('User');

  ?>
