<?php

 $price = 50;
 $vat = 15;

echo round($price * (($vat / 100) + 1), 2);

?>