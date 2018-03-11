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
                        <h2>Array Pointers</h2>
                        <p>It's worth mentioning array pointers and how they work. It may seem like a technical detail, but it will become important later when we start working with databases. PHP maintains a pointer that points to one of the items in an array. That item is referred to as the current item. By default, that's always the first item in the array. When we start looping through arrays using something like Foreach, PHP moves the pointer down the array as it assigns each value to the loop's variable. Moving the pointer to the next value is how PHP keeps track of which item you're working with now and what the next item is that it should give you after that.</p>
                        <blockquote>
                            <p>To know where the array pointer is a <code>current();</code> function can be used.</p>
                        </blockquote>
                        <h2>Manipulating array pointers with functions</h2>
                        <p>There are functions specific for arrays worth mentioning that are built right into php in order to work with pointers.</p>
                        <ul>
                            <li>Outputs the value where the pointer is.</li>
                            <li><code>current(array)</code></li>
                            <li>Sets the pointer position to the next in line.</li>
                            <li><code>next(array)</code></li>
                            <li>Sets the point to the previous position.</li>
                            <li><code>prev(array)</code></li>
                            <li>Moves the pointer back to the first element.</li>
                            <li><code>reset(array)</code></li>
                            <li>Moves the pointer all the way to the end.</li>
                            <li><code>end(array)</code></li>
                        </ul>
                        </br>
<pre>
<b>Moving the pointer manually.</b>
&lt;?php
    $ages = array(8,45,17,23,65,33,87);
    echo "1: " . current($ages) . "\n";
    next($ages);
    echo "2: " . current($ages) . "\n";
    next($ages);
    next($ages);
    echo "3: " . current($ages) . "\n";
    prev($ages);
    echo "4: " . current($ages) . "\n";
    reset($ages);
    echo "5: " . current($ages) . "\n";
    end($ages);
    echo "6: " . current($ages) . "\n";
    next($ages);
    echo "7: " . current($ages) . "\n";
?&gt;

&lt;?php
    reset($ages);
    while ($age = current($ages)) {
        echo $age . ", ";
        next($ages);
    }
?&gt;
</pre>

<pre class="alert alert-info">
<b>Moving the pointer manually.</b>
<?php
    $ages = array(8,45,17,23,65,33,87);
    echo "1: " . current($ages) . "\n";
    next($ages);
    echo "2: " . current($ages) . "\n";
    next($ages);
    next($ages);
    echo "3: " . current($ages) . "\n";
    prev($ages);
    echo "4: " . current($ages) . "\n";
    reset($ages);
    echo "5: " . current($ages) . "\n";
    end($ages);
    echo "6: " . current($ages) . "\n";
    next($ages);
    echo "7: " . current($ages) . "\n";
?>

<b>This example shows the pointer being used for counting iterarions and display values.</b>
<?php
    reset($ages);
    while ($age = current($ages)) {
        echo $age . ", ";
        next($ages);
    }
?>
</pre>
                        <p>For more information about how array pointers work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
