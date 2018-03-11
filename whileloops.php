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
                        <h2>While loops</h2>
                        <p>Loops allow us to write code that will execute more than once, without having to write out all of that code over and over again. The code executes once and then it loops back to the start to execute again. And each time the code executes, it doesn't necessarily do the exact same thing. The values of variables may be changed each time it goes through the loop. So that logical expressions inside the loop do different things.</p>
                        <p>And of course, a critical feature of any loop is knowing when to stop looping. We're going to take a look at three types of loops. While loops, <a href="forloops.php">for loops</a>, and <a href="foreachloops.php">foreach loops</a>. We're going to begin with while loops. I think these are the simplest. The syntax is simply while followed by an expression, that's the argument to it and then a statement. The statement is the loop, the thing we're going to do over and over again, while the expression evaluates to true. Now with a single line statement this will work. But most times you're going to have a multi-line statement and I also think it's just a good practice to always use those curly braces.</p>
                        <blockquote>
                            <p>A loop has to include a condition and an incrementing index.</p>
                        </blockquote>
<pre>
<b>// Defining an while loop:</b>
&lt;?php
    $count = 0;
    while ($count  &lt;&#61; 10) {
        echo $count;
        $count++;
    }
?&gt;

<b>// Looping and using the information to find out which numbers are even and which are odd:</b>
&lt;?php
    $index = 0;
    while ($index &lt; 10) {
        if ($index % 2 &#61;&#61;&#61; 0) {
            echo $index . " is even.\n";
        } else {
            echo $index . " is odd.\n";
        }
        $index++;
    }
?&gt;
</pre>

<pre class="alert alert-info">
Counting interations: <?php $count = 0;
while ($count <= 10) {
    echo $count . " ";
    $count++;
    }
?>


<?php
    $index = 0;
    while ($index < 10) {
        if ($index % 2 === 0) {
            echo $index . " is even.\n";
        } else {
            echo $index . " is odd.\n";
        }
        $index++;
    }
?>
</pre>
                        <p>For more information about how while loops work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
