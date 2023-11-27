<?php
$n = 5; // Change this value to calculate factorial for a different number
$factorial = 1;
// logic:
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}

echo "Factorial of $n is: $factorial\n";
?>
