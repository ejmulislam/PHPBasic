<?php

$grades = array(85, 92, 78, 88, 95);


echo "Original Grades: ";
print_r($grades);


function sortGradesDescending($arr) {
    rsort($arr); // Sort the array in descending order
    return $arr;
}


$sortedGrades = sortGradesDescending($grades);


echo "Sorted Grades (Descending): ";
print_r($sortedGrades);

?>
