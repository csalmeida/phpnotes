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
                        <h2>echo, echo!</h2>
                        <p>To use <code>php</code> on a page a <code>&lt;?php ?&gt;</code> <b>tag</b> is needed. And for this tag to do something we have to nest inside it <code>statements</code>, and these <b>always</b> end with a <code>;</code> (semicolon).</p>
                        <blockquote>
                            <p>Characters inside single or double quotes are called <code>strings</code>! You can think of it as text for now.</p>
                        </blockquote>
                        <p>So let's try a first statement, using the <code>echo</code> function (used when we want to show something on the page) to write <i>Hello, World!</i> on the page.</p>
<pre>
//Let's try:
&lt;?php
    echo "Hello, World!";
?&gt;
</pre>
                        <p>As shown in the example above a <code>&lt;?php ?&gt;</code> tag is opened and inside is typed the <code>echo</code> followed by a space and in this case a <code>string</code> with <i>Hello, World!</i> inside double quotes, always ending with a semicolon. </p>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>What about linebreaks?</h2>
                        <p>There are two simple ways to break a line, the most simple one is to use the <code>&lt;/br&gt;</code> tag, by placing it either inside the string where the line break is meant to happen or outside string. Another way is by placing a <code>&#92;n</code> (new line) in the exact place where the line break is needed.</p>
<pre>
//Let's try with the &lt;/br&gt; tag:
&lt;?php
    echo "Hello,&lt;/br&gt; World!";
?&gt;

// Or:
&lt;?php
    echo "Hello, World!";
?&gt;&lt;/br&gt;

//It's also possible with a escape character:
&lt;?php
    echo "Hello, &#92;n World!";
?&gt;
</pre>
                    <p>Now you can print your messages on the page using <i>php</i>. You can probably do that with HTML as well, but if you added some variables to it you could start making it more dynamic!</p>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>See it in action</h2>
                        <p>Here's some php generated code, using the <code>echo</code> function.</p>
<pre>
<?php echo "Hello, World!"; ?></br>
<?php echo "Two plus two is equal to " . (2+2) . "."; ?></br>
<?php echo 1733; ?></br>
<?php echo "I have a \nlinebreak."; ?>
</pre>
                    <p>As a final note it's important to consider that <code>echo</code> is really a function. A special kind of function as the parameter can be put without any strict syntax. Echo is probably one of the most used functions in php, but it's only better than HTML if we add some more elements to go with it. Check out <a href="variables.php">variables</a> next to learn more.</p>
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
