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
                        <h2>Type juggling and casting</h2>
                        <p>So strings integers floats those are called types. And we've seen a few times when PHP converted a value from one type to another type for us. For example we were able to add a string to an integer and we saw that PHP converted a Boolean true to be the string one when it was output to our webpage. This process is referred to as Type Juggling. When PHP does it on the fly for us. We can also explicitly set a type ourselves. For example, converting a string one into the integer one.</p>
                        <blockquote>
                            <p>The <code>gettype(value);</code> function is useful to know which type of value we're dealing with.</p>
                        </blockquote>
                        <h4>Input</h4>
<pre>
// Type juggling:

&lt;?php
    //Type string variable.
    $count = "2";
    echo gettype($count);

    //Get's converted into integer.
    $count += 3;
    echo gettype($count);

    $cats = "I have " . $count . " cats.";
    echo gettype($cats);
?&gt;

// Type casting:
&lt;?php
    // Converts to integer.
    settype($count, "integer");
    echo gettype($count);

    //Converts during use.
    $count2 = (string) $count;
    echo gettype($count2);
?&gt;
</pre>
                        <h4>Output</h4>
<pre class="alert alert-info">
<?php $count = 2; $cats = "I have " . $count . " cats."; ?>
$count is type: <?php echo gettype($count); ?>


$cats is type: <?php echo gettype($cats); ?>

<?php settype($count, "integer"); ?>

$count is type: <?php echo gettype($count); ?>

<?php $count2 = (string) $count; ?>

$count2 is type: <?php echo gettype($count); ?>
</pre>
                        <p>For more information about how type juggling and type casting work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
