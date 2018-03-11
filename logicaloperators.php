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
                        <h2>Comparison and Logical Operators</h2>
                        <p>Especially when using conditional code it's needed to compare is a value is equal, greater than. less than or even not equal to another, also some times we want to add more than one conditions, for instance compare if a and b are not equal and if b is greater than a. This is where these operators come into play.</p>
                        <table class="table">
                            <thead>
                                <th>Comparison Operators</th>
                                <th>Signs</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Equal</td>
                                    <td><b>==</b></td>
                                </tr>
                                <tr>
                                    <td>Identical</td>
                                    <td><b>===</b></td>
                                </tr>
                                <tr>
                                    <td>Greater than</td>
                                    <td><b>&gt;</b></td>
                                </tr>
                                <tr>
                                    <td>Less than</td>
                                    <td><b>&lt;</b></td>
                                </tr>
                                <tr>
                                    <td>Great than or equal to</td>
                                    <td><b>&gt;=</b></td>
                                </tr>
                                <tr>
                                    <td>Less than or equal to</td>
                                    <td><b>&lt;=</b></td>
                                </tr>
                                <tr>
                                    <td>Less than or greater than</td>
                                    <td><b>&lt;&gt;</b></td>
                                </tr>
                                <tr>
                                    <td>Not equal</td>
                                    <td><b>!==</b></td>
                                </tr>
                            </tbody>
                        </table>
                        <blockquote>
                            <p>The equal operator acts when a value is rougthly equal to another while identical it only validates when they are the same type.</p>
                        </blockquote>
                        <table class="table">
                            <thead>
                                <th>Logical Operators</th>
                                <th>Signs</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Logical AND</td>
                                    <td><b>&&</b></td>
                                </tr>
                                <tr>
                                    <td>Logical OR</td>
                                    <td><b>||</b></td>
                                </tr>
                            </tbody>
                        </table>
<pre>
<b>// Both of theses conditions must validate as true for the code to run:</b>
&lt;?php
    $a = 4;
    $b = 3;
    $c = 1;
    $d = 20;
    if (($a > $b) && ($c > $d)) {
        echo "The variable a is larger than b and c is larger than d.";
    }
?&gt;


<b>// One one of them needs to be true in order for this code to run:</b>
&lt;?php
    $a = 4;
    $b = 3;
    $c = 1;
    $d = 20;
    if (($a > $b) || ($c > $d)) {
        echo "The variable a is larger than b and c is larger than d.";
    }
?&gt;


<b>// If the variable $e is NOT set than set it to 200.</b>
&lt;?php
    if (!isset($e)) {
        echo $e = 200;
    }
?&gt;

<b>// If the variable $e is NOT set than set it to 200, but in this case it's set to 100.</b>
&lt;?php
    $e = 100;
    if (!isset($e)) {
        echo $e = 200;
    } else {
        echo "$e is already set to {$e}.";
    }
?&gt;

<b>// If the quantity is considered empty and is not numeric than asks again.</b>
&lt;?php
    $quantity = "";
    if (empty($quantity) $$ !is_numeric($quantity) {
        echo "Please type a quantity.";
    } else {
        echo "Success!";
    }
?&gt;
</pre>

<pre class="alert alert-info">
Two conditions must be met: <?php $a = 4; $b = 3; $c = 1; $d = 20; if (($a > $b) && ($c < $d)) {echo "The variable a is larger than b and c is larger than d.";} ?>


One or the other must be met: <?php $a = 4; $b = 3; $c = 1; $d = 20; if (($a > $b) || ($c > $d)) {echo "One of them is larget than the other.";} ?>


If $e NOT set: <?php if (!isset($e)) {echo $e = 200;} ?>


If $e IS set: <?php $e = 100; if (!isset($e)) {echo $e = 200;} else {echo '$e is already set to ' . $e . ".";} ?>


Using the empty state: <?php $quantity = ""; if (empty($quantity) && !is_numeric($quantity)) {echo "Please type a quantity.";} else {echo "Success!";} ?>
</pre>
                        <p>For more information about how comparison and logical operators work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
