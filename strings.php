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
                        <h2>Strings</h2>
                        <p>Formed by a group of characters, this includes, letters, numbers symbols and spaces and are defined inside quotation marks, either single quotes or double quotes.</p><p>Let's have a look at some <b class="alert-success">good</b> and <b class="alert-danger">bad</b> use of strings:</p>
<pre class="alert alert-success">
Good:
&lt;?php
    echo "I'd like the weather to be okay today.";
?&gt;

&lt;?php
    echo 'And then, he said: "it is over".';
?&gt;

//In this one the character is escaped.
&lt;?php
    echo 'And then, he said: "it\'s over".';
?&gt;

//The string is stored inside a variable and then is displayed.
&lt;?php
    $message = "I'm lost on a island full of monkeys. HELP!";
    echo $message;
?&gt;
</pre>
<pre class="alert alert-danger">
Bad:
&lt;?php
    echo 'I'd like the weather to be okay today.';
?&gt;

&lt;?php
    echo "And then, he said: "it is over".";
?&gt;

&lt;?php
    $message = 'I'm lost on a island full of monkeys. HELP!";
    echo $message;
?&gt;
</pre>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                    <h3>Concatenation</h3>
                    <p>Strings can be tied together in order to make a complete sentence, imagine you have to <code>echo</code> a string saying <code>"Welcome, Anna"</code>. While Anna could be any other user, concatenate a variable that points to the right user might be useful. In order to concatenate a string a <code>.</code> (dot) has to placed between values, let's see some examples:</p>
<pre>
//Join two strings:
&lt;?php
    echo "I'd like the weather to be okay today, " . "but it will most likely rain.";
?&gt;

//Join a string and a number:
&lt;?php
    echo "Two plus two is " . 4 . ".";
?&gt;

//Concatenation with a variable:
&lt;?php
    $message = "I'm lost on a island full of monkeys. HELP!";
    echo "Just got a message in a bottle saying:\n" . $message;
?&gt;
</pre>
                        <p>When working with variables and specially with a database such as <code>MySQL</code>, it might be needed to build strings overtime. And there's a way to bring and store those strings together at the same time:</p>
<pre>
//In these case there are two variables with string values.
&lt;?php
    $first = "The quick brown fox";
    $second = " jumped over the lazy dog.";
?&gt;

//A third variable is used to both concatenate and store these two sentences.
&lt;?php
    $third = $first;
    $third .= $second;
    echo $third;
?&gt;
</pre>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h3>Variables directly inside strings</h3>
                        <p>When putting variables inside strings, php will by default detect it because of the <code>$</code> sign. However, this only works with double quotes and if the variable touches any other word inside the string, it will just "think" that both the variable and the adicional word are one variable. Messy right? Let's see some examples.</p>
<pre class="alert alert-success">
// Everything works because the string is surrounded by double quotes.
&lt;?php
    $name = "Anna";
    echo "Hello $name";
?&gt;
</pre>
</br>
<pre class="alert alert-danger">
// Does not work, it will only print literally "Hello $name".
&lt;?php
    $name = "Anna";
    echo 'Hello $name';
?&gt;
</pre>
</br>
<pre class="alert alert-success">
// Works like a charm, should print "complete".
&lt;?php
    $part1 = "comp";
    echo "{$part1}lete";
?&gt;
</pre>
<pre class="alert alert-danger">
// There is no space between the variable and the word,
   thus causing php to think that $part1lete is a variable by itselft.
&lt;?php
    $part1 = "comp";
    echo "$part1lete";
?&gt;
</pre>
                        <p>Just like any other statement, after variables are declared it ends with a semicolon. The next step needed to take is learn more about these values, <a href="strings.php">begining with strings</a>.</p>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                    <h2>See it in action</h2>
                    <p>Here's some php generated code, using the same examples with <code>strings</code>.</p>
<pre>
<?php echo "I'd like the weather to be okay today."; ?>

<?php echo 'And then, he said: "it is over".'; ?>

<?php echo 'And then, he said: "it is over".'; ?>

<?php $part1 = "Comp"; echo "{$part1}lete"; ?>

<?php $message = "I'm lost on a island full of monkeys. HELP!"; echo $message; ?>

<?php echo "Two plus two is " . 4 . "."; ?>

<?php echo "Just got a message in a bottle saying:\n" . $message; ?>
</pre>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>String Functions</h2>
                        <p>There are functions specific for strings worth mentioning that are built right into php.</p>
                        <h4>1st set of functions:</h4>
                        <ul>
                            <li>Converts the string to lowercase.</li>
                            <li><code>srttolower(string)</code></li>
                            <li>Converts the string to uppercase.</li>
                            <li><code>srttoupper(string)</code></li>
                            <li>Converts first letter to uppercase.</li>
                            <li><code>ucfirst(string)</code></li>
                            <li>Converts the first letter of all words to uppercase.</li>
                            <li><code>ucwords(string)</code></li>
                        </ul>
                        </br>
<pre class="alert alert-info">
Default message: <?php $message = "The quick brown fox jumped over the lazy dog."; echo $message; ?>

Lowercase: <?php echo strtolower($message); ?>

Uppercase: <?php echo strtoupper($message); ?>

Uppercase first: <?php echo ucfirst($message); ?>

Uppercase words: <?php echo ucwords($message); ?>
</pre>
                        <h4>2nd set of functions:</h4>
                        <ul>
                            <li>Outputs the lenght of a string.</li>
                            <li><code>srtlen(string)</code></li>
                            <li>Removes the spaces arround a string.</li>
                            <li><code>trim(string)</code></li>
                            <li>Looks for a term. Takes two arguments, the string where to look and what to look for.</li>
                            <li><code>strstr(string, searchTerm)</code></li>
                            <li>Replace characters within a string, takes three arguments, </li>
                            <li><code>str_replace(currentWord, newWord, string)</code></li>
                        </ul>
                        </br>
<pre class="alert alert-info">
Length: <?php echo strlen($message); ?>

Trim: <?php echo "A" . trim(" B C D ") . "E"; ?>

Find: <?php echo strstr($message, "fox"); ?>

Replace by string: <?php echo str_replace("lazy", "rabid", $message); ?>
</pre>
                        <h4>3rd set of functions:</h4>
                        <ul>
                            <li>Repeats a string depending on the number given. Takes two arguments.</li>
                            <li><code>srt_repeat(string, howManyTimes)</code></li>
                            <li>Makes a substring using the index position of the characters to define the start and end.</li>
                            <li><code>substr(string, start, end)</code></li>
                            <li>Finds the position of a word.</li>
                            <li><code>strpos(string, searchTerm)</code></li>
                            <li>Finds the position of a character.</li>
                            <li><code>strchr(string, searchTerm)</code></li>
                        </ul>
                        </br>
<pre class="alert alert-info">
Repeat: <?php echo str_repeat($message, 2); ?>

Make substring: <?php echo substr($message, 4, 10); ?>

Find position: <?php echo strpos($message, "brown"); ?>

Find character: <?php echo strchr($message, "z"); ?>
</pre>
                        <p>For more information about strings and string functions it's worth having a look a the <a href="http://php.net/manual/en/">official php documentation page</a>.</p>
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
