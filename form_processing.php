<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <title>Template | Cristiano Almeida</title>
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
                        <h2>Form Processed</h2>
                        <p>Here's what happened:</p>
<pre class="alert alert-info">
<b>Go ahead, make mistakes and learn!</b>
<?php 
    //echo print_r($_POST);
    // Checking submission.
    if (isset($_POST["submit"])) {
        
    // Setting default values.    
        if (isset($_POST["username"])) {
            $username = $_POST["username"];
        } else {
            $username = "";
        }        
        if (isset($_POST["password"])) {
            $password = $_POST["password"];
        } else {
            $password = "";
        }
        
    // Setting default values using ternary.
        $username = isset($_POST['username']) ? $_POST['username'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        
        echo "\nForm submited successfully!\nThe username is : {$username} and the password has " . strlen($password) . " characters.\n";
    }
    
    print_r($_POST);
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