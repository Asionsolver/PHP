<?php

// ! String Data Types
$name = "harish";
$age = "25";
echo "<h1>This name is $name and age is $age</h1><br>";
echo " $name is a good boy and his age is $age<br>";
// ! Integer - Non decimal numbers

$income = 455;

echo "$name income is $income and his age is $age<br>";


// ! Float - Decimal numbers
$price = 45.5;
echo "This product price is  $price<br>";


// ! Boolean - True or False
$is_logged_in = true;
$is_logged_out = false;

echo var_dump($is_logged_in);
echo '<br>';
echo var_dump($is_logged_out);
echo '<br>';

// ! Object - Instance of a class

// ! Array - Collection of values

$friend = array('harish', 'suresh', 'ramesh', 'suresh');

echo var_dump($friend);