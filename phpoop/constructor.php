<?php
  class Table {
    # Creating properties.
    public $legs;
    static public $total_tables = 0;

    # this code runs as soon as the class is instanciated.
    public function __construct($leg_count=4) {
      $this->legs = $leg_count;
      Table::$total_tables++;
    }

    public function __destruct() {
      Table::$total_tables--;
    }
  }


  echo Table::$total_tables . "<br>";
  $t1 = new Table();
  echo Table::$total_tables . "<br>";
  $t2 = new Table();
  $t3 = new Table();
  echo Table::$total_tables . "<br>";
?>
