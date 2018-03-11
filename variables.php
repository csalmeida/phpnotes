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
                        <h2>Variables</h2>
                        <p>Like any other scripting/programming language <code>php</code> also uses variables. These are containers that hold a value. Imagine a bucket where you can put things in it, a labeled bucket! Variables work just the same way but we have to worry about a few things when using them.</p>
                        <h4>Syntax Rules</h4>
                        <ul>
                            <li>Starts with the <code>$</code> <b>everytime</b>.</li>
                            <li>Variable names cannot have spaces. For real!</li>
                            <li>Can contain letters, an example would be <code>$example</code>.</li>
                            <li>Can contain numbers, but never at the start! <code>$example2015</code>.</li>
                            <li>Can contain underscore, <code>$eye_see</code>.</li>
                            <li>These are case sensitive, which means x and X are completely different variables.</li>
                        </ul>
                        <h4>What you can store in a variable.</h4>
                        <p>Variables can store a range of values, an these can be:</p>
                        <ul>
                            <li>Strings, they are a group of characters stored between double or single quotes. <code>$myString = "Whooo Yeahhh!";</code>.</li>
                            <li>Integers, numbers! No need for quotes though. <code>$myInteger = 1733;</code>.</li>
                            <li>Floating Point, numbers (again). Easy peasy. <code>$myFloat = 17.33;</code>.</li>
                            <li>Boolean, a true or false value. <code>$myBoo = true;</code>.</li>
                            <li>Arrays, they store values in an order but more of that later. <code>$myArray = array('Legalize', 1733, true);</code>.</li>
                        </ul>
                        <blockquote>
                            <p>Variables defined in other php blocks can still be used on the following others.</p>
                        </blockquote>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                    <h2>See it in action</h2>
                    <p>Here's how, you can declare variables.</p>
<pre>
$myString = "I come from a variable called \$myString.";
$myNumber = 1733;
$myBoo = true;
</pre>
                        <p>Here's some php generated code, using <code>variables</code>.</p>
<pre>
In this very white space, there are variables!
<?php
    $myString = "I come from a variable called \$myString.";
    $myNumber = 1733;
    $myBoo = true;
?></br>
String stored in a variable: <?php echo $myString ; ?></br>
The following number is stored in a variable: <?php echo $myNumber; ?></br>
This boolean is stored in a variable: <?php echo $myBoo; ?>
</pre>
                        <p>Just like any other statement, after variables are declared it ends with a semicolon. The next step needed to take is learn more about these values, <a href="strings.php">begining with strings</a>.</p>
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
