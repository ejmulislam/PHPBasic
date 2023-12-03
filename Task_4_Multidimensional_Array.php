<?php


$studentGrades = array(
    array('Math' => 85, 'English' => 92, 'Science' => 78),
    array('Math' => 88, 'English' => 95, 'Science' => 90),
    array('Math' => 75, 'English' => 80, 'Science' => 85),
);


echo "Student Grades:\n";
print_r($studentGrades);


function calculateAverageGrades($gradesArray) {
    foreach ($gradesArray as $index => $student) {
        $averageGrade = array_sum($student) / count($student);
        echo "Student " . ($index + 1) . " Average Grade: $averageGrade\n";
    }
}


calculateAverageGrades($studentGrades);

?>
