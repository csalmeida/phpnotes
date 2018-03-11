<?php

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Object Oriented.</title>
    <!-- Add mobile viewport support. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <!-- Even things out between browsers. -->
    <link href='../css/normalize.css' rel='stylesheet' type='text/css'>
    <!-- Skeleton responsive framework. -->
    <link href='../css/skeleton.css' rel='stylesheet' type='text/css'>
    <!-- Main stylesheet. -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="wrapper">
      <h1>Object Oriented PHP</h1>
      <p>Lists examples of using classes, objects and other features from OOP in PHP.</p>
      <nav>
        <a href="../index.php" class="button button-primary">START.</a>
        <a href="content/class.php" class="button">Classes.</a>
        <a href="index.php" class="button">START.</a>
      </nav>
<pre><code>
  # Creating a new class.
  class Person {
    # Defining properties.
    public $first_name = "Geralt";
    public $last_name = "of Rivia";
    public $nickname = "Butcher of Blaviken";

    # Defining method.
    public function fullName() {
      # Using this keyword to allow different
      # instances to run method.
      return $this->first_name . " " . $this->last_name;
    }
  }

  # Instantiating an object.
  $geralt = new Person();
  # Running object method.
  echo $geralt->fullName();

  # Instantiating a second object from same class.
  $keira = new Person();
  
  # Changing property values.
  $keira->first_name = "Keira";
  $keira->last_name = "Metz";

  # Running class method from second object.
  echo $keira->fullName();

<b>Output:</b>
<?php
# Creating a new class.
class Person {
  # Defining properties.
  public $first_name = "Geralt";
  public $last_name = "of Rivia";
  public $nickname = "Butcher of Blaviken";

  # Defining method.
  public function fullName() {
    # Using this keyword to allow different instances to run method.
    return $this->first_name . " " . $this->last_name;
  }
}

# Instantiating an object.
$geralt = new Person();
# Running object method.
echo $geralt->fullName() . "<br>";

# Instantiating a second object from same class.
$keira = new Person();
# Changing property values.
$keira->first_name = "Keira";
$keira->last_name = "Metz";
# Running class method from second object.
echo $keira->fullName() . "<br>";
?>

</code></pre>
    </div>
  </body>
</html>
