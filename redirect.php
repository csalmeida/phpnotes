<?php 
// How to redirect to a new page using 302.
    function redirect_to($newLocation){
        header("Location: $newLocation");
        exit;
    }
    $loggedIn = $_GET["loggedIn"];
    if ($loggedIn == 1) {
        redirect_to("functions.php");
    } else {
        redirect_to("continue.php");
    }
?>