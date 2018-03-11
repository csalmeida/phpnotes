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
                        <h2>If Statement</h2>
                        <p>To have our code make choices about what should happen based on certain conditions. And we're going to do that by using logical expressions. The most common of all types of logical expression, is the if statement,. This is the basic format of an if statement in PHP. We've got if followed by in parentheses an expression. And that expression is going to evaluate to either true or false. It's going to have a Boolean result. So if the expression is true, then the statement that follows it will be executed. If it evaluates to false, then the statement will not be executed. And the code will skip past it and keep on evaluating down the rest of the PHP after it.</p>
                        <blockquote>
                            <p>An if statement is defined by <code>if (condition) { //do something }</code>.</p>
                        </blockquote>
<pre>
// Defining an if statement:

&lt;?php
    if (10 > 5) {
        echo "Ten is larger than five!";
    }
?&gt;

// The if statement also works with variables:

&lt;?php
    $new_user = true;
    if ($new_user) {
        echo "Welcome to our website!";
    }
?&gt;
</pre>

<pre class="alert alert-info">
Is 10 &gt; 5? <?php if (10 > 5) {echo "Ten is larger than five!";} ?>

User message: <?php $new_user = true; if ($new_user) {echo "Welcome to our website!";} ?>
</pre>
                        <blockquote>
                            <p>Conditional code can only take expressions that evaluate either to true or false.</p>
                        </blockquote>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>Else and Else if</h2>
                        <p>In addition to the <code>if</code> statement the <code>else</code> and <code>elseif (condition)</code> keywords are used in order to check for multiple possibilities on a block of conditional code.</p>
<pre>
// Adding else to an if statement:

&lt;?php
    if (10 > 5) {
        echo "Ten is larger than five!";
    } else {
        echo "Incredible! Somehow Ten is not larger than five. Are you sure?
    }
?&gt;

// Adding else and elseif to an if statement:

&lt;?php
    $new_user = true;
    if ($new_user) {
        echo "Welcome to our website!";
    } elseif ($new_user == false) {
        echo "Glad to have you back.";
    } else {
        echo "I'm not sure if you are a new or regular user.";
    }
?&gt;
</pre>

<pre class="alert alert-info">
Is 10 &gt; 5? <?php if (10 > 5) {echo "Ten is larger than five!";} ?>

User message: <?php $new_user = false; if ($new_user) {echo "Welcome to our website!";} elseif ($new_user === false) {echo "Glad to have you back.";} else {echo "I'm not sure if you are a new or regular user.";} ?>
</pre>
                        <blockquote>
                            <p>When comparing if a value is equal to another the <code>==</code> equal operator or the <code>===</code> strictly equal operator must be used since the <code>=</code> sign is an assigment command.</p>
                        </blockquote>
                        <p>For more information about how condicional code work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
