<?php

$numbers = range(1, 10);
echo "Original Array: ";
print_r($numbers);
function removeEvenNumbers($arr) {
    $result = array_filter($arr, function ($value) {
        return $value % 2 != 0; // Keep only odd numbers
    });

    return $result;
}

$filteredNumbers = removeEvenNumbers($numbers);

echo "Resulting Array: ";
print_r($filteredNumbers);

?>
