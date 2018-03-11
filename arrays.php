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
                        <h2>Arrays</h2>
                        <p>Arrays are a common feature in many programming languages. Arrays are going to be extremely useful for helping us to keep information organized. So, what is an array? An array is an ordered, integer-indexed collection of objects. That's a fancy way of saying that we can take objects, like strings and integers and put them into a group and then keep their position in that group in the same order, so that we can refer to those objects by their positions. We can tell the array, give me back the first object, give me the fifth object, and so on, because the objects are going to be indexed according to what position they hold in the array.</p>
                        <p>One good way to think about arrays is that they're like those expanding file folders that you can buy to put your bills in. You might put your electric bills in the first pocket and your phone bills in the second pocket, your mortgage payments in the third pocket, and so on. You have a preset order and you can put things in pockets and take them out again. Put this paper into the third pocket. Show me the paper that's in the fifth pocket. That's the way that arrays work. Now there's no limits to how many pockets your array can have. At least none that you're going to need to worry about. And a pocket contained anything that a variable can contain. A string, a number, even another array.</p>
                        <blockquote>
                            <p>Arrays have a zero-based index, which means the first item is on position 0.</p>
                        </blockquote>
<pre>
//Defining an empty array:
&lt;?php
    $myFirstArray = array();
?&gt;

//Adding values to an array;
&lt;?php
    $numbers = array(8, 16, 32, 40, 48);
?&gt;

//php 5.4 and after also supports a short hand notation:
&lt;?php
    $myThirdArray = [1,2,3,4];
?&gt;

//Mixing values in an array.
&lt;?php
    $mixedValues = array('Read me!', true, 1733, array("x", "y", "z"));
?&gt;

//Accessing and displaying information in an array.
&lt;?php
    $messages = array("Hi, you okay?", "Just got to Victoria Station.", "See you tomorrow!");
    echo $message[1];
    echo $mixedValues[3][0];
?&gt;

//Show an array (usually for debug).
&lt;?php
    print_r($mixedValues);
?&gt;

//Set or add new entries.
&lt;?php
    $mixedValues[4] = "new entry, yay!";
?&gt;

//Add new entrie always to the end of the array.
&lt;?php
    $mixedValues[] = "I will always be the last";
?&gt;
</pre>
                        <blockquote>
                            <p><code>print_r();</code> stands for print readable and  can help to debug arrays.</p>
                        </blockquote>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>Associative Arrays</h2>
                        <p>PHP has another type of array, called an associative array. And it's important for us to learn how to use both types, and to understand the difference between them. An associative array is an object-indexed collection of objects and it's very similar to what we saw for the definition of a regular array. But notice that it doesn't say that it's ordered anymore. And instead of being integer-indexed it is object-indexed, that is, they're going to be indexed by a label of some sort. Let's remember the expanding file folder metaphor that I gave you when we were talking about arrays. Associative arrays are similar, but they work more like hanging file folders. They're not in any certain order and they can be rearranged. Each of those file folders is going to have a label on it. And that's how we're going to find information.</p>
                        <p>Since we won't know what order the information is in, instead we will thumb through those file folders until we find label that matches what we're looking for. Instead of saying, our phone bill is in pocket 1, and our electric bill is in pocket 2, instead we'll say, find the pocket labeled phone bill and pull out its contents. We call the label on each of these pockets the key, and the contents of what's inside the pocket the value. And the combination of the label and the value is referred to as the key value pair. So we'll always have a series of keys and values that make up our associative array.</p>
                        <blockquote>
                            <p>Both an array and associative array have their uses. When the order matters to us we want to use an array. When the order is not important, we want to have the convenience of having a label that we can refer to, well then we want to use an associative array.</p>
                        </blockquote>
<pre>
//Defining an empty  associative array:
&lt;?php
    $lovingArrays = array();
?&gt;

//Creating an associative array and displaying values:
&lt;?php
    //This is an associative array.
    $assoc_array = array("first_name" => "Cristiano", "last_name" => "Almeida", "age" => 102);
    //Extracts values from the array.
    echo $assoc_array["first_name"] . " " . $assoc_array["last_name"] . " is " . $assoc_array["age"] . " years old.";
?&gt;

</pre>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                    <h2>See it in action</h2>
                    <p>Here's some php generated code, using the same examples with <code>strings</code>.</p>
<pre>
<?php $mixedValues = array('Read me!', true, 1733, array("x", "y", "z")); print_r($mixedValues); ?>

<?php $assoc_array = array("first_name" => "Cristiano", "last_name" => "Almeida", "age" => 102); echo $assoc_array["first_name"] . " " . $assoc_array["last_name"] . " is " . $assoc_array["age"] . " years old."; ?>
</pre>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>Array Functions</h2>
                        <p>There are functions specific for arrays worth mentioning that are built right into php.</p>
                        <ul>
                            <li>Return the number of items in an array.</li>
                            <li><code>count(array)</code></li>
                            <li>Returns the maximum value found.</li>
                            <li><code>max(array)</code></li>
                            <li>Returns the minimum value found.</li>
                            <li><code>min(array)</code></li>
                            <li>Sorts the values from min to max.</li>
                            <li><code>sort(array)</code></li>
                            <li>Sorts the values from max to min.</li>
                            <li><code>rsort(array)</code></li>
                            <li>Converts the values into a string with a custom separator.</li>
                            <li><code>implode(string, array)</code></li>
                            <li>Coverts values to an array by getting the value which separates them.</li>
                            <li><code>explode(string, array)</code></li>
                            <li>Looks for a value in inside the array, returns 1 if true.</li>
                            <li><code>in_array(value, array)</code></li>
                        </ul>
                        </br>
<pre class="alert alert-info">
// Examples retrieved from $numbers array. <?php $numbers = array(8, 2, 16, 1733, 14, 32, 40, 48); ?>


Count: <?php echo count($numbers); ?>

Max Value: <?php echo max($numbers); ?>

Min Value: <?php echo min($numbers); ?>


Sort: <?php sort($numbers); print_r($numbers) ?>

Reverse sort: <?php rsort($numbers); print_r($numbers) ?>

Implode: <?php echo $num_string = implode(", ", $numbers); ?>


Explode: <?php print_r(explode(", ",$num_string)); ?>

Is 15 in the array? <?php echo in_array(15, $numbers); ?>

Is <b>1733</b> in the array? <?php echo in_array(1733, $numbers); ?>

</pre>
                        <p>When not sure of which function to use with an array visit the <a href="http://php.net/manual/en/ref.array.php">official php documentation page</a>, in contains a detailed list about arrays functions.</p>
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
