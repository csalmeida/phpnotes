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
                        <h2>For loops</h2>
                        <p>For loops are very similar to While Loops. They repeat a section of code, until a condition is met. But the syntax used for doing it is very different. Why have both, then? Well, probably because For Loops are the most classic kind of loop that there is, and they're used in many other programming languages.</p>
                        <p>A For Loop looks very similar at first, except for the expression part. Instead of having one expression in parenthesis, we're going to have three separated by semicolons. And each one's going to perform a different function. Expression 1, is going to be executed the first time only. It's like an initializing statement before the loop starts. Expression 2, is the test expression that's going to be checked at the start of each loop.

Just like the expression that we had in the While Loop. Expression 3, is going to be executed at the end of every loop. Right after the loop finishes, right before it goes back and evaluates expression two again. Perhaps a better way to think of it is as initial test and each. There's the initial value, there's the test that its going to perform each time, and then each time through the last thing that its going to do is execute that each statement. Now, this syntax will work for a single line statement, but just like we saw with the While Loops. I think it's a good practice to always put curly braces around it. And if we have a multi-line statement those curly braces are required, we have to have it.</p>
                        <blockquote>
                            <p>For some developers for loops tend to be more practical as the syntax does not let an incrementing element to be forgotten.</br><code>for (var; condition; increment) { </br>
                                statement; </br>
                                }</code></p>
                        </blockquote>
<pre>
<b>// Let's compare both while and for loops:</b>

&lt;?php
    $count = 0;
    while ($count  &lt;&#61; 10) {
        echo $count;
        $count++;
    }
?&gt;

&lt;?php
    for ($count = 0; $count &lt; 10; $count++) {
        echo $count;
    }
?&gt;

<b>// Output even and odd numbers with a for loop:</b>
&lt;?php
    for ($i = 0; $i &lt; 10; $i++) {
        if ($i % 2 === 0) {
            echo $i . " is even.\n";
        } else {
            echo $i . " is odd.\n";
        }
    }
?&gt;
</pre>

<pre class="alert alert-info">
Counting interations: <?php
for ($count = 0; $count <= 10; $count++) {
        echo $count;
    }
?>


<?php
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 === 0) {
            echo $i . " is even.\n";
        } else {
            echo $i . " is odd.\n";
        }
    }
?>
</pre>
                        <p>For more information about how for loops work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
