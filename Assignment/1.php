<?php

// Take input from user
echo "Enter marks of five subjects:\n";
$physics = (int) readline("Physics: ");
$chemistry = (int) readline("Chemistry: ");
$biology = (int) readline("Biology: ");
$mathematics = (int) readline("Mathematics: ");
$computer = (int) readline("Computer: ");

// Calculate total marks
$total_marks = $physics + $chemistry + $biology + $mathematics + $computer;

// Calculate percentage
$percentage = ($total_marks / 500) * 100;

// Calculate grade using if-else statements
if ($percentage >= 90) {
    $grade = "A";
} elseif ($percentage >= 80) {
    $grade = "B";
} elseif ($percentage >= 70) {
    $grade = "C";
} elseif ($percentage >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

// Display results
echo "\nResults:\n";
echo "Total Marks: $total_marks/500\n";
echo "Percentage: $percentage%\n";
echo "Grade: $grade\n";

?>