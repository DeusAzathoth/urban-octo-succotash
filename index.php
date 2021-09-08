<?php
// This is a comment
echo "Hello world! </br>";

$odd_numbers = [1, 3, 5, 7, 9];
print_r($odd_numbers + "</br>");
echo count($odd_numbers) + "</br>";

unset($odd_numbers[2]);
print_r($odd_numbers + "</br>");
echo count($odd_numbers) + "</br>";

echo reset($odd_numbers)+ "</br>";
echo end($odd_numbers) + "</br>";



?>
This is out of php tag