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
                        <h2>Experiment Block</h2>
                        <p>This is a page with the purpose of testing php scripts. It may only display code that is already processed rather than source code.</p>
<pre class="alert alert-info">
<b>Any output should appear here!</b>
<?php
$link_id = 2;
$link_name = "Click here, there will be parameters associated with this URL.";
$company = "Johnson & Johnson";

$page_raw = "communicate.php";
$id = 10;
$user = "csalmeida";
$link_description = "Click here and check parameters on URL.";
?>
Enconding url: <a href="communicate.php?id=<?php echo $link_id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name; ?></a>

Raw url enconding: <a href="<?php echo rawurlencode($page_raw) . "?id=" . urlencode($id) . "&user=" . urlencode($user);?>"><?php echo $link_description ?></a>

Url parameters: <a href="redirect.php?loggedIn=1">Redirect to some other page.</a>

<?php

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
