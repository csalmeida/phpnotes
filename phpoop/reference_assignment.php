<?php
  # $a is set to 1.
  $a = 1;

  # $b points to $a.
  # If $b is changed than $a will assume the same value.
  $b =& $a;

  # $b is set to two. $a will have the same value due to it's reference.
  $b = 2;

?>
