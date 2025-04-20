<?php
// Function to multiply two parameters and display the result
function mul($param1, $param2) {
    echo "<h3>Multiplication of $param1 and $param2:</h3>";
    for ($i = 1; $i <= 5; $i++) { // Loop with five iterations
        $result = $param1 * $param2;
        echo "Iteration $i: $param1 * $param2 = $result<br>";
    }
}

// Calling the mul function five times with different parameters
echo "<h2>Calling mul Function with Different Parameters:</h2>";
mul(2, 3); // First call
mul(4, 5); // Second call
mul(6, 7); // Third call
mul(8, 9); // Fourth call
mul(10, 11); // Fifth call
?>