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
                        <h2>Constants</h2>
                        <p>A constant is the opposite of a variable. A variable can change or vary. A constant can't change. It remains constantly set at the same value. Constants are going to be recognizable on PHP because they're always written in all capital letters and there's no dollar sign in front of them. They're also going to differ from variables in another way. The only way to set a value for constant is to use a function. The define function. You can't just use the equal sign to assign a value. Like you can with variable.</p>
                        <blockquote>
                            <p>Constants can only be created using the <code>define(name, value);</code> function.</p>
                        </blockquote>
<pre>
// Defining a constant:

&lt;?php
    define("MAX_WIDTH", 980);
    echo MAX_WIDTH;
?&gt;
</pre>

<pre class="alert alert-info">
The constant returns: <?php define("MAX_WIDTH", 980); echo MAX_WIDTH; ?>
</pre>
                        <blockquote>
                            <p>The constant stays defined until it returns HTML to the user, but at that point the constant goes away.</p>
                        </blockquote>
                        <p>When it first comes in and grabs our script and executes it, it defines the constant, the constant stays defined until it returns HTML To the user, but at that point the constant goes away. Everything in our PHP goes away at that point, until the next request response cycle. So I don't want you to think this value is forever set in stone. However, during on execution of your PHP script, that value is going to be defined and it is going to be fixed. Typically, you're only going to use them for things that don't change, things that you really want to be hard and fast. Maybe you're going to define the root path of the place where you're going to store images, right? So you want to have that as a fixed location on this hard drive. This is where you can find your image storage.</p>
                        <p>That's the kind of thing that you would use a constant for because you're not going to be varying it. You want PHP to have a fixed location for those. So most of the time, you're probably going to want to use variables. And you're going to use constants sparingly. But they're going to be very useful for saving data that's fixed.</p>
                        <p>For more information about how constants work it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
