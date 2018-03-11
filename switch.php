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
                        <h2>Switch Statements</h2>
                        <p>different kind of logical expression called Switch Statements. Switch statements are similar to if statements. In that they control the flow through our application. But they're going to have a different syntax, some different rules to follow. And a couple of special gotchas that we want to make sure that we watch out for. First, let's look at the basic syntax. We're going to use the function name, switch, followed by an argument. And that argument's going to be a value. This is the value that we're going to be testing through each of a series of test cases. So then in our curly braces we're going to list off those test cases.</p>
                        <p>And each one is going to start with case, and then a test value to that we're going to test against value to see if their equal. And then a colon, and then a statement or series of statements that we want to execute. Then following that will be the next case that we want to test. So we'll test whether the values equal to test value two and if it is then we'll execute those statements. And then finally we have the option to provide a default case. If it doesn't match any of the above cases we're going to execute the statements that are defined by default. So, notice that we're dropping down each one of those cases, doing a test on each line.</p>
                        <blockquote>
                            <p>A switch statement if useful when you know how many values you are going to compare with the original one.</p>
                        </blockquote>
<pre>
<b>// Defining an switch statement:</b>
$contactBy = "post";

&lt;?php
    switch ($contactBy) {
        case "phone":
            echo "Please type your phone number.";
        case "email":
            echo "Please prove an e-mail address.";
        case "post":
            echo "Please provide a home or work address.";
        case "fax":
            echo "Provide a way ro contact by fax.";
        default:
            echo "Please provide a way of contact.";
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
Contact method: <?php $contactBy = "post";
switch ($contactBy) {
        case "phone":
            echo "Please type your phone number.";
            break;
        case "email":
            echo "Please prove an e-mail address.";
            break;
        case "post":
            echo "Please provide a home or work address.";
            break;
        case "fax":
            echo "Provide a way ro contact by fax.";
            break;
        default:
            echo "Please provide a way of contact.";
    }
?>

</pre>
                        <blockquote>
                            <p>Switch statements have to be stopped once they got a match using <code>break;</code>, otherwise they will keep executing the other cases regardless.</p>
                        </blockquote>
                        <p>For more information about how switch statements work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
