<?php
    // Inserting external functions into the document.
    require_once("external_functions.php");
    // Action attr of the form.
    $action = "form_custom_func.php";
    // Checks if the form was submitted and ALL validations will be wrapped arround it.
    //There are multiple if statements in order to be able to display multiple errors at the same time.
    if (isset($_POST['submit'])) {
        //Pulls the email and password from the $_POST array.
        $email = $_POST['email'];
        $password = $_POST['password'];
        $users = ["csalmeida@example.ch", "dc2-gomes@example.ch", "tobogun@example.ch"];
        $messages = array();
        if ($email !== "tobogun") {$messages[] = "<span class='alert alert-warning'>Not equal but condition working!</span>\n";}
        // Checking if this is empty.
        if (!ispresent($email)) {
            $messages[] = "<span class='alert alert-warning'>You need both your email and password!</span>\n";
        }
        // Check if login and password match.
        if ($email === "tobogun@example.ch" && $password === "banana") {
            $messages[] = "<span class='alert alert-success'>Logging in: {$email}</span>";
            //redirect_to($action);
        } else {
            $messages[] = "<span class='alert alert-danger'>Ups! Wrong username or password.</span>\n";
        }
    } else {
        $email = null;
        $messages[] = "<span class='alert alert-info'>Please log in!</span>";
    }
?>
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
                        <h2>Form processing with custom functions.</h2>
                        <p>This form grabs functions to validate data from another file.</p>
                        <?php
                           display($messages);
                        ?>
                    <form action="<?php echo $action?>" method="post">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-default" value="Submit">Submit</button>
                    </form>
                        </br>
<pre class="alert alert-info">
<b>Go ahead, make mistakes and learn!</b>
<?php
    echo print_r($_POST);
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
