<?php

echo "Hello world";

$variable = "John";
$vard = "Surname";
echo "<br>";

echo $variable;
echo "<br>";
echo $variable.$vard;
echo "<br>";

$array = array(
'key' =>'value',
'key1' =>'value1',

);

print_r($array);
echo "<br>";

echo "<br>";
foreach($array as $key => $value){
echo "$key $value<br>";
}
echo "<pre> ";
print_r($_GET);
echo "<pre> ";

echo "
<form method= 'post'>
<input type='text'>
<br>
<input type='submit' value='submit'>
<form>";
