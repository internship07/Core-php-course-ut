<?php
// Marks
$mark1 = 28;
$mark2 = 67;
$mark3 = 95;

// Function to evaluate marks
function evaluateMarks($mark) {
    if ($mark > 90) {
        echo "Marks: $mark - Good<br>";
    } elseif ($mark > 35 && $mark < 70) {
        echo "Marks: $mark - Average<br>";
    } elseif ($mark < 35) {
        echo "Marks: $mark - Fail<br>";
    }
}

// Evaluating each mark
echo "<h2>Marks Evaluation:</h2>";
evaluateMarks($mark1); // Fail
evaluateMarks($mark2); // Average
evaluateMarks($mark3); // Good
?>