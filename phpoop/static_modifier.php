<?php
  # Static properties and methods are tied to the class itself, not an instance.
  # We can use them without an instance.
  class Student {

    # Static property.
    static public $total_students = 0;

    static public function add_student() {
      Student::$total_students++;
    }

    # Static method.
    static public function welcome_students($var="Hello") {
      echo "{$var} students.";
    }
  }

  // This is the syntax when instancing a class.
  #$student = new Student();
  #echo $student->total_students;

  # Acessing a static property.
  echo Student::$total_students . "<br>";
  # Calling an static method.
  echo Student::welcome_students('Greetings') . "<br>";
  # Acessing a static property assigning a value.
  Student::$total_students = 23;
  echo Student::$total_students . "<br>";

  # static attributes and properties are not copied over to another class when extended but referenced.
  # This means if $foo is assigned to 11 in class Three all the classes with adopt that value for $foo.
  class One {
    static public $foo;
  }

  class Two extends One {  }
  class Three extends One {  }

  One::$foo = 1;
  Two::$foo = 2;
  Three::$foo = 3;

  # All of them will be set to three, since static works as a reference for extended classes.
  echo One::$foo . "<br>";
  echo Two::$foo . "<br>";
  echo Three::$foo . "<br>";

?>
