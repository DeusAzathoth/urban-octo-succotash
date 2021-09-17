<?php
// This is a comment
echo "Hello world! </br>";

$odd_numbers = [1, 3, 5, 7, 9];
print_r($odd_numbers);
echo count($odd_numbers);

unset($odd_numbers[2]);
print_r($odd_numbers);
echo count($odd_numbers);

echo reset($odd_numbers);
echo end($odd_numbers);



?>
</br>
This is out of php tag