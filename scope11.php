<?php
// Global variable
$globalValue = 90; // Global variable
echo "Initial global value: $globalValue<br>";
// Function to add 10 to the global variable
function add() {
    global $globalValue; // Access the global variable
    $globalValue += 10;
    echo "Value after adding 10: $globalValue<br>";
}
$globalValue1 = 90;
// Function to subtract 50 from the global variable
function subtract() {
    global $globalValue1; // Access the global variable
    $globalValue1 -= 50;
    echo "Value after subtracting 50: $globalValue1<br>";
}

// Calling the functions
echo "<h2>Global Variable Operations:</h2>";
add();       // Adds 10 to the global value
subtract();  // Subtracts 50 from the global value
?>