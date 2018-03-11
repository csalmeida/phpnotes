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
                        <h2>Break</h2>
                        <p>We've seen Break already. Remember, it was an important part of working with switch statements. We used Break to stop execution of any other cases, and then to exit switch function. We'll use it in a similar way with loops. Break will end execution of the loop. Not just the current iteration, but all iterations. You can think of it as breaking out of the loop. In the last movie, for the continue function I suggested the image of a Hollywood casting director saying next in the middle of an audition that was in progress.</p>
                        <p>Let's continue that metaphor here for a second. Break, would be if the casting director watched a few auditions and then said, this is the one. You've got the job, the rest of the auditions are canceled. I don't need to see any more. Break stops the whole process. And it's very useful when we've found what we're looking for or when we've reached a definitive answer to a question. We can stop looking, stop looping, and move on.</p>
                        <blockquote>
                            <p>The <code>break</code> function defines the end of a loop or function.</p>
                        </blockquote>
<pre>
<b>A example of break, ends the loop on the fifth iteration:</b>
&lt;?php
    for ($i = 0; $i <= 10; $i++) {
        if ($i === 5) {
            break;
        }
        echo $i . " ";
    }
?&gt;

<b>This example shows a loop inside another loop where this one breaks both of them.</b>
&lt;?php
    for ($i = 0; $i <= 10; $i++) {
        if ($i % 2 === 0) { continue(1); }
        for ($k = 0; $k <= 10; $k++) {
        if ($k === 3) { break(2); }
            echo $i . "-" . $k . "\n";
        }
    }
?&gt;
</pre>

<pre class="alert alert-info">
<b>This example shows a loop inside another loop where this one breaks both of them.</b>
<?php
    for ($i = 0; $i <= 10; $i++) {
        if ($i === 5) {
            break;
        }
        echo $i . " ";
    }


?>

<b>This example shows a loop inside another loop where this one breaks both of them.</b>
<?php
    for ($i = 0; $i <= 10; $i++) {
        if ($i % 2 === 0) { continue(1); }
        for ($k = 0; $k <= 10; $k++) {
        if ($k === 3) { break(2); }
            echo $i . "-" . $k . "\n";
        }
    }
?>
</pre>
                        <p>For more information about how the break function works it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
