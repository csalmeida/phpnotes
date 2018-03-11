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
                        <h2>Numbers</h2>
                        <p>php is completly able to do basic math operations with numbers, store them in variables and deal with both integer and floating point numbers. Let's have a quick look at how numbers work at a first glance within php.</p>
                        <blockquote>
                            <p>php works well when mixing integer and floating point numbers.</p>
                        </blockquote>
<pre>
// Basic Math:
&lt;?php
    echo ((50 + 2) * 4) / 2;
?&gt;

// Using variables:
&lt;?php
    $birthYear = 1992;
    echo 'This person is about ' . 2015 - $birthYear;
?&gt;

// Functions:
&lt;?php
    echo 'The following is a random number: ' . rand();
?&gt;

// Quick operations when dealing with variables and numbers:
&lt;?php
    $birthYear += 3;
    $birthYear -= 3;
    $birthYear *= 3;
    $birthYear /= 3;

    $birthYear++;
    $birthYear--;
?&gt;

</pre>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h3>Integer</h3>
                        <p>A few notes on integers.</p>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>Integer Functions</h2>
                        <p>There are functions specific for integers worth mentioning that are built right into php.</p>
                        <ul>
                            <li>Get the absolute value.</li>
                            <li><code>abs(number - number)</code></li>
                            <li>Raises a number to the power of another.</li>
                            <li><code>pow(number, powerTo)</code></li>
                            <li>Get the square root of a number.</li>
                            <li><code>sqrt(number)</code></li>
                            <li>Divide a number with another and return the remainder.</li>
                            <li><code>fmod(number, divideBy)</code></li>
                            <li>Generates a random number.</li>
                            <li><code>rand()</code></li>
                            <li>Generates a random number but with a min and max value.</li>
                            <li><code>rand(min, max)</code></li>
                        </ul>
                        </br>
<pre class="alert alert-info">
Absolute: <?php echo abs(0 - 300); ?>

Exponential: <?php echo pow(3, 2); ?>

Square Root: <?php echo sqrt(100); ?>

Modulo: <?php echo fmod(20, 7); ?>

Random: <?php echo rand(); ?>

Random (min, max): <?php echo rand(0, 10); ?>
</pre>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                    <h3>Floating Point</h3>
                    <p>A few notes on floating point numbers. These are also known as decimal numbers, it's just a number followed by a decimal in them followed by a number of significant digits.</p>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>Floating Point Functions</h2>
                        <p>There are functions specific for numbers worth mentioning that are built right into php.</p>
                        <ul>
                            <li>Rounds the number to the decimal points indicated.</li>
                            <li><code>round(number, decimalPoints)</code></li>
                            <li>Forces a number to round up.</li>
                            <li><code>ceil(number)</code></li>
                            <li>Forces a number to round down.</li>
                            <li><code>floor(number)</code></li>
                            <li>Returns 1 if integer or no value if float.</li>
                            <li><code>if_int(number)</code></li>
                            <li>Returns 1 if float.</li>
                            <li><code>if_float(number)</code></li>
                            <li>Returns 1 if of numeric type.</li>
                            <li><code>if_numeric(number)</code></li>
                        </ul>
                        </br>
<pre class="alert alert-info">
Round: <?php echo round(3.14, 1); ?>

Ceiling: <?php echo ceil(3.14); ?>

Floor: <?php echo floor(3.14); ?>

Checks for integer type: <?php echo is_int(3); ?>

Checks for float type: <?php echo is_float(3.14); ?>

Checks for numeric type: <?php echo is_numeric(3.14); ?>

</pre>
                        <p>For more information about numbers and number related functions it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
