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
                        <h2>Booleans</h2>
                        <p>A Boolean is a programming type that can either be true or false. That's it, one of those two values. And true is not the string true or even the number one. It's just simply the value true. Booleans are very useful in programming because we can use them when performing tests. For example, we used the in <a href="arrays.php">array function</a> to test whether an integer was inside of an array. The result was that the test was a Boolean, true if the integer was present, false if it was not. Let's start by creating ourselves a new workspace for this.</p>
                        <blockquote>
                            <p>To confirm if a value is a boolean, the <code>is_bool(value);</code> function can be used.</p>
                        </blockquote>
<pre>
// Examples retrieved from $boolTrue and $boolFalse variable. <?php $boolTrue = true; $boolFalse = false; ?>


Result 1: <?php echo $boolTrue; ?>

Result 2: <?php echo $boolFalse; ?>

Is result 2 boolean? <?php echo is_bool($boolFalse); ?>
</pre>
                        <p>For more information about how boolean values work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
