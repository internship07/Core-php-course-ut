<?php
// First set of variables
$a = 'raj';
$b = "raj";

// Performing comparison operations
echo "<h2>Comparison Operations for Variables \$a and \$b:</h2>";
echo "Is \$a equal to \$b? " . var_export($a == $b, true) . "<br>"; // true
echo "Is \$a identical to \$b? " . var_export($a === $b, true) . "<br>"; // true
echo "Is \$a not equal to \$b? " . var_export($a != $b, true) . "<br>"; // false
echo "Is \$a not identical to \$b? " . var_export($a !== $b, true) . "<br>"; // false

// Checking data types
echo "<h2>Data Types for Variables \$a and \$b:</h2>";
echo "Type of \$a: " . gettype($a) . "<br>"; // string
echo "Type of \$b: " . gettype($b) . "<br>"; // string
// Third set of variables
$a = 90;
$b = 34;

// Performing comparison operations
echo "<h2>Comparison Operations for Third Set of Variables (\$a = 90, \$b = 34):</h2>";
echo "Is \$a greater than \$b? " . var_export($a > $b, true) . "<br>"; // true
echo "Is \$a less than \$b? " . var_export($a < $b, true) . "<br>"; // false
echo "Is \$a equal to \$b? " . var_export($a == $b, true) . "<br>"; // false
echo "Is \$a not equal to \$b? " . var_export($a != $b, true) . "<br>"; // true
echo "Is \$a greater than or equal to \$b? " . var_export($a >= $b, true) . "<br>"; // true
echo "Is \$a less than or equal to \$b? " . var_export($a <= $b, true) . "<br>"; // false

// Checking data types
echo "<h2>Data Types for Third Set of Variables:</h2>";
echo "Type of \$a: " . gettype($a) . "<br>"; // integer
echo "Type of \$b: " . gettype($b) . "<br>"; // integer
// First set of variables for logical operations
$a = 14;
$b = 40;

echo "<h2>Logical Operations for First Set (\$a = 14, \$b = 40):</h2>";
echo "Is \$a > 10 AND \$b > 30? " . var_export($a > 10 && $b > 30, true) . "<br>"; // true
echo "Is \$a > 20 OR \$b > 30? " . var_export($a > 20 || $b > 30, true) . "<br>"; // true
echo "Is NOT (\$a > \$b)? " . var_export(!($a > $b), true) . "<br>"; // true

// Second set of variables for logical operations
$a = -2;
$b = 70;

echo "<h2>Logical Operations for Second Set (\$a = -2, \$b = 70):</h2>";
echo "Is \$a > 0 AND \$b > 50? " . var_export($a > 0 && $b > 50, true) . "<br>"; // false
echo "Is \$a < 0 OR \$b > 60? " . var_export($a < 0 || $b > 60, true) . "<br>"; // true
echo "Is NOT (\$a < \$b)? " . var_export(!($a < $b), true) . "<br>"; // false
?>
?>