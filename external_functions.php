<?php
//Redirect to another page function.
    function redirect_to($newLocation) {
        header("Location: {$newLocation}");
        exit;
    }


//Display multiple items inside an array.
//ATTENTION! This function does not return any values!
    function display($array) {
        foreach ($array as $value) {
         echo "<br>" . $value . "<br><br>";
        }
    }
/* =======
VALIDATION
======= */
//If a value is set and if it's not equal to "" than return true.
function ispresent($value){
    return isset($value) && !empty($value) && trim($value) !== "";
}
        
//If the length of the value is less than the minimum length than return true.
function hasnminlen($value, $minlen) {
    return strlen($value) < $minlen;
}

//If the expression is present in a value or if that expression is NOT the first character return true.
function format($value, $expression) {
    return preg_match("/{$expression}/", $value) || $value[0] !=="a";
}
?>

