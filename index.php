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
                        <h2>1.Say hello to php!</h2>
                        <p>These are my php notes. They got me up n' running with <code>php</code>. Creating this documentation created an opportunity to get to know the syntax and the basic concepts of this language. <strong>This is by no means a complete guide, althought you migiht get something of value out of it I recommend the use of other resources as well.</strong></p>
                        <p>php is a language that runs on a server (this means it's usually stored in a computer other than the one diplsaying the webpage), and the code it's never sent to the user besides the results. It's built to be used with html and it can be either embeded or generated.</p>
                        <p>While <code>html</code> can only be used to build static web pages, <code>php</code> can make them dynamic and change content based on conditions, either interactions from the user or from data retrieved from the database.</p>
                        <p>It is a server-side scripting language, that means it only runs when events occur, such as a page being requested. Also it reads the code from top to bottom and needs little or no user interaction.</p>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>2.Setup and Configuration <small>Boooring.</small></h2>
                        <p>There are a couple of things needed to get started, such as a local web server and php processor. No need to be scared, you just need to download and install somethings and that's it.</p>
                        <h3>Working with XAMPP</h3>
                        <p>Download  and install a webserver to work with, there are many options to pick from, but my suggested one is <a href="https://www.apachefriends.org/index.html" title="XAMPP">XAMPP</a>, which you can use on <i>Windows</i>, <i>Mac</i> and <i>Linux</i>.</p>
                        <p>Inside the <i>xampp</i> folder should be a file called <code>xampp-control.exe</code>, that's the one you need to run, it will open a control panel with multiple services, click <b>start</b> on Apache. You are now running a webserver on your machine and cam be used to create and test projects before deploying them to the web.</p>
                        <blockquote cite="Cristiano Almeida">
                            <p>Skype uses the same ports as Apache <i>(2016)</i> so I'ts recommended to close it before trying to start the service.</p>
                        </blockquote>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>3.Use the right files, in the right place</h2>
                        <p>Files that are going to contain <code>php</code> need to be prepared in order to work properly. While creating files, only files with a <code>.php</code> extension will be processed by the webserver. Try and create a file called <code>index.php</code> or if you have any html templates, change their file extension to <code>.php</code>.</p>
                        <p>Your local server only servers files from one folder. Navigate to <code>../xampp/htdocs/</code> and create a new folder for your projects, then copy or cut your files into the new folder such as <code>../xampp/htdocs/php</code>. If you are using any other <a href="http://www.webopedia.com/TERM/S/stack.html" target="_blank">stack</a> look for a similar folder name like <code>www</code>.</p>
                        <p>You should now have your <code>.php</code> files inside your <code>../xampp/htdocs/php</code> path. <small>The last folder may vary in name, since it's up to you.</small></p>
                    </article>
                    <article class="col-md-8 col-md-offset-2">
                        <h2>4.View your webpages.</h2>
                        <p>To be able to see the php processing something you need to access your local server through your browser of choice. Try typing <code>http://localhost</code>, it should show you a xampp page. This is the default page on the server. Now, to access the page you just created you need to type the path to your folder, <code>http://localhost/php/index.php</code>, that should do the trick. You should use that path whenever you want to test your code for that project.</p>
                    </article>
                </section>
                <section class="row">
                    <article class="col-md-8 col-md-offset-2">
                        <h1>Ready to go!</h1>
                        <p>With everything set up the next step is to learn how to write php code on a web document, please feel free to <a href="echo.php">proceed to the php tag and echo page</a>.</p>
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
