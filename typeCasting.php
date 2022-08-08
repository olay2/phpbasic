<?php
$price = "100";
$dalivery = 50 ;

$total= $price + $dalivery;

echo $total;

echo "befor". gettype($price)."<br>";

$price = (integer) $price;

echo "after". gettype($price);

?>