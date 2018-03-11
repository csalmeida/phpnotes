<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <title>PHP Notes</title>
    </head>
    <body>
        <div class="container wrap">
            <header>
                <?php
                    include 'nav.php';
                ?>
            </header>
            <main>
                <section class="row">
                    <article class="col-md-8 col-md-offset-2">
                        <h2>Classes</h2>
                        <p>Classes can be pictured as objects and fits into object oriented programming (<i>OOP</i>) concept. OOP allows the creating of very modular applications. For instance if a page as a form that sends and e-mail to someone but also saves it to a database, the e-mail script could become an object, the database script could be another one. This is useful because everything is separate and easier to maintain.</p>
                        <p>But what is an object right? Well in our dat-to-day lives an object coulde be a car, a key, a guitar, you get the ideia. However in OOP the idea of an object extends to pretty much anything. For instance, a human, a dog, the sky. Whatever the object is it usually has it's own properties and things they're able to do. For example a car usually has four wheels, a color and a make. A person usually has 4 limbs, 2 arms and 2 legs, a gender, a name. The car is able to turn the engine on or off, accelerate and a person might be able to walk, see, pick up things, you get the drift.</p>
                        <p><b>So what is a class?</b> It probably comes to mind that not all cars are the same color and not all people have the same name or gender. This where classes come in. They act as a template for an object that can be adjusted if there's the need to. Have a look at the examples.</p>
                        <blockquote>
                            <p>A <code>class</code> acts as a template to create objects from it.</p>
                        </blockquote>
<pre>
<b>Let's create a class of a person with some properties.</b>
<p>Nothing will show up on the page because only a <i>template</i> was created.</p>
&lt;?php
    class Person {
      var $gender = "";
      var $limbs = 4;
      var $alive = true;
    } # End of class person.
?&gt;

<p>We can now create a new person from the class.</p>
&lt;?php
    $human = new Person();
    // Let's echo the number of limbs for this person.
    echo $human->limbs;
?&gt;

<p>Now let's define this person gender and echo it to the page.</p>
&lt;?php
  $human->gender = "female";
  echo $human->gender;
?&lt;
</pre>

<pre class="alert alert-info">
<b>Let's create a class of a person with some properties.</b>
<p>Nothing will show up on the page because only a <i>template</i> was created.</p>
<?php
class Person {
  var $first_name = "";
  var $gender = "";
  var $limbs = 4;
  var $alive = true;

  function greeting() {
    echo "Hello, I'm " . $this->first_name . ".";
  }
} # End of class person.
?>
<p>We can now create a new person from the class.</p>
<?php
  $human = new Person();
  echo $human->limbs;
?>
<p>Now let's define this person gender and echo it to the page.</p>
<?php
  $human->gender = "female";
  echo $human->gender;
?>
</pre>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>Methods</h2>
                        <p>What we need to do now is add some more functionality to our class. Now, classes can contain methods. These are the same things as functions but generally they are called functions when they are on their own and methods when they are inside of a class. Now I may slip up from time to time and call it a function but keep that clear. If it's on its own, it's a function; if it's inside a class, it's a method. That's the standard convention of object oriented programming.</p>
                        <blockquote>
                            <p>A <code>method</code> allow an object to perform tasks.</p>
                        </blockquote>
<pre>
<b>Let's create add a method to the Person class.</b>
&lt;?php
    class Person {
        var $first_name = "";
        var $gender = "";
        var $limbs = 4;
        var $alive = true;

        # Adding a greeting method to this class.
        function greeting() {
          // Whatever name <b>this</b> person has, echo it.
          echo "Hello, I'm" . $this->first_name . ".";
        }
    } // End of class person.
?&gt;

<p>We can now create a new person from the class.</p>
&lt;?php
    // Creating a person.
    $woman = new Person();
    // Giving the person a name.
    $woman->first_name = "Keira";
    // Running the method.
    $woman->greeting();
?&gt;
</pre>

<pre class="alert alert-info">
<b>Let's create add a method to the Person class.</b>
<?php
$woman = new Person();
$woman->first_name = "Keira";
$woman->greeting();
?>
</pre>
<blockquote>
    <p>The keyword <code>$this</code> refers to the value of the current instance.</p>
</blockquote>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>Debugging functions.</h2>
                        <p>There are functions specific for classes worth mentioning that are built right into php. These might help in debugging or development.</p>
                        <h4>1st set of functions:</h4>
                        <ul>
                            <li>Returns all the classes defined.</li>
                            <li><code>get_declared_classes()</code></li>
                            <li>Checks whether a class exists.</li>
                            <li><code>class_exists(string_class)</code></li>
                            <li>Checks whether a method exists within a class.</li>
                            <li><code>get_class_methods(string_class)</code></li>
                            <li>Checks whether a method exists within a class.</li>
                            <li><code>method_exists(string_class, string_method)</code></li>
                            <li>Get class of an instance.</li>
                            <li><code>get_class(instance)</code></li>
                            <li>Check if instance if from a class.</li>
                            <li><code>is_a(instance, string_class)</code></li>
                        </ul>
                        </br>
<pre class="alert alert-info">
<b>Running some of these debugging functions:</b>
Class exists: <?php echo class_exists("Person") ? "Class Person exists." : "Class Person doesn't exist."; ?>

Method exists: <?php echo method_exists("Person", "greeting") ? "Method greeting exists." : "Method greeting doesn't exist."; ?>

Get class of an instance: <?php echo get_class($woman) ?>

Method exists: <?php echo is_a($woman, "Person") ? $woman->first_name . " is a " . get_class($woman) . "." : $woman->first_name . " is NOT a person."; ?>
</pre>

                        <p>For more information about how classes work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
                    </article>
                </section>
            </main>
            <footer>
                <?php
                    include 'footer.php';
                ?>
            </footer>
        </div>
    <!-- Javascript. -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
