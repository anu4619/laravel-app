<?php
$rows = 5; // Change this value to create a different-sized inverted triangle

for ($i = $rows; $i >= 1; $i--) // for rows
{
    for ($j = 1; $j <= $i; $j++) // for columns
    {
        echo "* ";
    }
    echo "\n";
}
?>
