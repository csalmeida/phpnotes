<?php
  class Beverage {
    # Creating properties.
    public $name;
  }


  echo Table::$total_tables . "<br>";
  $a = new Beverage();
  $a->name = "coffee";
  $b = $a; // Reference a variable.
  $b->name = "tea";
  # $b is getting the value from $a.
  echo $a->name . "<br>";


?>
