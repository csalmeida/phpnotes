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
                        <h2>NULL and empty</h2>
                        <p>NULL is a fancy term for nothing, for not having a value. It's not zero. It's not an empty string. It's the actual lack of a value. And if we can set a value into a variable, we also have to have some way to talk about the fact that variable might not have a value at all. And null allows us to do that.</p>
                        <blockquote>
                            <p>To confirm if a value is type NULL, the <code>is_null(value);</code> function can be used.</p>
                        </blockquote>
<pre>
// Examples retrieved from a couple of variables . <?php $var1 = null; $var2 = ""; ?>

&lt;?php
    $var1 = null;
    $var2 = "";
?&gt;

Is var1, null?: <?php echo is_null($var1); ?>

Is var2, null?: <?php echo is_null($var2); ?>

Is var3, null?: <?php echo is_null($var3); ?>


Is var1, set?: <?php echo isset($var1); ?>

Is var2, set?: <?php echo isset($var2); ?>

Is var3, set?: <?php echo isset($var3); ?>


Is var1, empty?: <?php echo empty($var1); ?>

Is var2, empty?: <?php echo empty($var2); ?>

Is var3, empty?: <?php echo empty($var3); ?>
</pre>
                        <blockquote>
                            <p>Empty is going to be an empty string, null, 0, 0.0. Meaning, a float in which the value is zero, a string with a zero inside of it, false, or an empty array.</p>
                        </blockquote>
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
