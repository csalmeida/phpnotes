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
                        <h2>Functions</h2>
                        <p>A function is code that preforms a specific task, which is then packaged up into a single unit that can then be called upon whenever that task is needed. An example of a function that we've already seen and used would be in array. Any time we want PHP to whether an element is in an array we can call the in array function. We provide the function data to work with in the form of arguments. And the function returns output to us at the end. These are common feature functions, providing them input and getting back output. Up until now, we've been looking at the built-in functions that PHP provides, but we aren't limited to just these functions.</p>
                        <p>We can also define our own. In this document, we'll learn how to craft and use custom functions. And we'll start by learning the syntax that's used to define them. You define a function by first saying, function, and then a space. And then the name that you want to give this function. It's very much like the variable names that we assign. And the rules are very similar. We can have letters, numbers, underscores, and dashes. You can't have any spaces, though. And it must start with either a letter or an underscore. Unlike variable names though, function names are case insensitive. So, with a variable, if we had capital var, and lower case var. Those were two different variable names.</p>
                        <blockquote>
                            <p>This is how a function is defined.</br><code>function  name($arg1, $arg2) { </br>
                                statement; </br>
                                }</code></p>
                        </blockquote>
<pre>
<b>Defining a few functions:</b>
&lt;?php
    function say_hello() {
        echo "Hello, World! \n";
    }

    say_hello();

    function say_hello_to($word) {
        echo "Hello, {$word}! \n";
    }

    say_hello_to("Anna");
?&gt;
</pre>

<pre class="alert alert-info">
<b>Defining a few functions:</b>
<?php
    function say_hello() {
        echo "Hello, World! \n";
    }

    say_hello();

    function say_hello_to($word) {
        echo "Hello, {$word}! \n";
    }

    say_hello_to("Anna");
?>
</pre>
                        <blockquote>
                            <p>After defining a function, the code inside it only runs if the function is called.</p>
                        </blockquote>
                        </article>
                        <article class="col-md-8 col-md-offset-2">
                            <h2>Function Arguments</h2>
                            <p>Arguments act like variable inside functions, they can be set in any order but once set they have to be used and have a value when the function get's called. For instance if a variable as three arguments, those have to be filled in the order they were previously defined for the function to work as supposed to.</p>
<pre>
<b>Defining a few functions:</b>
&lt;?php
    function better_hello($greeting, $target, $punct) {
        echo $greeting . " " . $target . $punct . "\n";
    }

    better_hello("Heya", "cowboy", "!");
    better_hello("Hello", "Anna", ".");
    better_hello("Welcome back", "Junior", ".");
?&gt;
</pre>

<pre class="alert alert-info">
<b>Adding multiple arguments to a function:</b>
<?php
    function better_hello($greeting, $target, $punct) {
        echo $greeting . " " . $target . $punct . "\n";
    }

    better_hello("Heya", "cowboy", "!");
    better_hello("Hello", "Anna", ".");
    better_hello("Welcome back", "Junior", ".");
?>

<?php
    function add($val1, $val2) {
        $sum = $val1 + $val2;
        return $sum;
    }

    $result = add(10, 5);
    echo $result . "\n";
?>

<?php
    function even_better_hello($greeting, $target, $punct) {
        return $greeting . " " . $target . $punct . "\n";
    }

    echo even_better_hello("Hello", "Anna", ".");
?>
</pre>
                        <p>For more information about how functions work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
