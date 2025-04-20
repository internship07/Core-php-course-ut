<?php
// Multidimensional associative array with fields name, age, and date of birth
$details = [
    ['name' => 'Alice', 'age' => 25, 'dob' => '1998-01-15'],
    ['name' => 'Bob', 'age' => 30, 'dob' => '1993-05-20'],
    ['name' => 'Charlie', 'age' => 22, 'dob' => '2001-08-10']
];

// Displaying the details array
echo "<h2>Details:</h2>";
foreach ($details as $detail) {
    echo "Name: " . $detail['name'] . ", Age: " . $detail['age'] . ", Date of Birth: " . $detail['dob'] . "<br>";
}
?>