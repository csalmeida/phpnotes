<?php
    session_start();
    $name = "test";
    $value = "Cookies are so awesome, love them.\n";
    $expire = time() + (60*60*24*7);
    setcookie($name, $value, $expire);

    if (empty($_COOKIE["logged"])) {
        setcookie("logged", "The user is logged in!", $expire);
    } else {
        setcookie("logged", null, (time() - 3600));
    }
?>
<?php require_once("external_functions.php"); ?>
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
                        <h2>Cookies</h2>
                        <p>This page was created to test cookie sessions.</p>
<pre class="alert alert-info">
<b>Baking cookies here!</b>
<?php
    print_r($_COOKIE);
    $test = isset($_COOKIE["test"]) ? $test = $_COOKIE["test"] : $test = "";
    $logged = isset($_COOKIE["logged"]) ? $logged = $_COOKIE["logged"] : $logged = "No cookie available.\n";
    echo $test;
    echo $logged;
?>
<b>Now time for a session!</b>
<?php
    $mySession = $_SESSION["first_name"] = "Cristiano";
    echo $mySession . "\n";
    print_r($_SESSION);
?>
</pre>
                        <p>For more information about php it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
