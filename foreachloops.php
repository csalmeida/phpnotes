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
                        <h2>Foreach loops</h2>
                        <p>Foreach loops are a little different from the previous two types of loops. Foreach loops are going to take an array and loop through each item of the array until it gets to the end. If you think back, while loops and for loops know whether to quit or to keep looping by testing if a condition has been met. Foreach loops, on the other hand, are going to know whether to quit or whether there are items left in the array to loop over. The end of the array is what ends the looping. There's really just two approaches to looping. Let's use a real-world scenario for a second. Imagine that I have a classroom with 20 kids in it.</p>
                        <p>And I have to put name tags on all of them. Now, I could just go around the room. And I could put a name tag on each kid and keep track of the numbers as I went. And knowing that there are 20 kids, when I had gotten to the number 20, I'd know I was done. Or, since I know that I have a finite set, I could just line them all up, start at the beginning and move down the line. And when I got to the end of the line, I would know I was done. I wouldn't have to keep track of the count as I was going. I mean, I could count. I could certainly know that I was on the fourth kid, but I wouldn't have to. I could just start at the first kid, go to the second kid, and then the third kid, until I got to the end of the line. That's how a foreach loop works.</p>
                        <blockquote>
                            <p>This type of loop does not need either a condition or an increment since it uses the array length to determine when to stop.</br><code>foreach ($array as $value) { </br>
                                statement; </br>
                                }</code></p>
                        </blockquote>
<pre>
<b>Showing values inside the array:</b>
&lt;?php
    $ages = [17,8,14,65,102,43,3,30];
    foreach ($ages as $age) {
        echo "Age is {$age}.\n";
    }
?&gt;

<b>Using associative arrays:</b>
&lt;?php
    $person = array(
            "first_name" => "Kevin",
            "last_name" => "Skoglund",
            "address" => "123 High Street",
            "city" => "Beverly Hills",
            "state" => "CA",
            "zip_code" => "90210",
            );
    foreach ($person as $attribute => $data) {
        $attr_nice = ucwords(str_replace("_", " ", $attribute));
        echo "{$attr_nice}: {$data}\n";
    }
?&gt;
</pre>

<pre class="alert alert-info">
<b>Showing values inside the array:</b>
<?php
$ages = [17,8,14,65,102,43,3,30];
foreach ($ages as $age) {
        echo "Age is {$age}.\n";
    }
?>

<b>Using associative arrays:</b>
<?php
$person = array(
            "first_name" => "Kevin",
            "last_name" => "Skoglund",
            "address" => "123 High Street",
            "city" => "Beverly Hills",
            "state" => "CA",
            "zip_code" => "90210",
            );
foreach ($person as $attribute => $data) {
        $attr_nice = ucwords(str_replace("_", " ", $attribute));
        echo "{$attr_nice}: {$data}\n";
    }
?>
</pre>
                        <blockquote>
                            <p>What is doing is for each item in the array $ages, assign it to a variable called $age and do something with it on that iteration.</p>
                        </blockquote>
                        <p>Whenever you're working with an array, you should first think about using foreach loops before you go to one of the other types. Because foreach loops are tailor made for working with arrays. So, if you have an array chances are foreach loops are what you want.</p>
                        <p>For more information about how foreach loops work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
