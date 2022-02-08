<?php
function largest($a, $b, $c) {
  $maxium = $a;

  if ($a >= $b && $a >= $c)
    $maxium = $a;
  if ($b >= $a && $b >= $c)
    $maxium = $b;
  if ($c >= $a && $c >= $b)
    $maxium = $c;
  
  echo "Largest number among $a, $b and $c is: $maxium\n";
}

largest(20, 10, 5);
?>