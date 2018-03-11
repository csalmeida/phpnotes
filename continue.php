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
                        <h2>Continue</h2>
                        <p>We'll start with Continue. Continue is used inside a loop to skip the rest of the current iteration and to go immediately to the conditional valuation that starts the next iteration. It may sound silly, but for me, continue evokes the image of a Hollywood casting director shouting next in the middle of an audition. It's like saying, we've seen enough, thanks, let's skip ahead to the next one. To give you an example, let's imagine that we have a database of college students and our code is going to loop through them and send them all in email. But, if a student is already signed up for a biology course this semester. Then we aren't going to send them the email.</p>
                        <p>So we start the loop, we check to see if the student has signed up for Biology, and if so then we know that we don't need to do any further processing at all. We can just skip to the next student record. That's what continue allows us to do. And it makes our code more efficient.</p>
                        <blockquote>
                            <p>The <code>continue</code> function skips the current iteration, starting the next one.</p>
                        </blockquote>
<pre>
<b>A example of continue, it skips the number five and adds an X instead:</b>
&lt;?php
    for ($i = 0; $i &lt;= 10; $i++) {
        if ($i === 5) {
            echo "<b>X</b> ";
            continue;
        }
        echo $i . " ";
    }
?&gt;

<b>The use of continue to also skip iterations in their parent loops:</b>
&lt;?php
    for ($i = 0; $i &lt;= 10; $i++) {
        if ($i % 2 === 0) { continue(1); }
        for ($k = 0; $k <= 10; $k++) {
        if ($k === 3) { continue(2); }
            echo $i . "-" . $k . "\n";
        }
    }
?&gt;
</pre>

<pre class="alert alert-info">
<b>A example of continue, it skips the number five and adds an X instead:</b>
<?php
    for ($i = 0; $i <= 10; $i++) {
        if ($i === 5) {
            echo "<b>X</b> ";
            continue;
        }
        echo $i . " ";
    }
?>

<b>The use of continue to also skip iterations in their parent loops:</b>
<?php
    for ($i = 0; $i <= 10; $i++) {
        if ($i % 2 === 0) { continue(1); }
        for ($k = 0; $k <= 10; $k++) {
        if ($k === 3) { continue(2); }
            echo $i . "-" . $k . "\n";
        }
    }
?>
</pre>
                        <p>For more information about how the continue function works it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
