<?php
// Multidimensional associative array with names and marks
$students = [
    ['name' => 'Alice', 'marks' => 95],
    ['name' => 'Bob', 'marks' => 67],
    ['name' => 'Charlie', 'marks' => 28]
];

// Displaying the array elements using a foreach loop
echo "<h2>Displaying Array Elements Using Foreach Loop:</h2>";
foreach ($students as $student) {
    echo "Name: " . $student['name'] . ", Marks: " . $student['marks'] . "<br>";
}

// Displaying the array elements using a for loop
echo "<h2>Displaying Array Elements Using For Loop:</h2>";
for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i]['name'] . ", Marks: " . $students[$i]['marks'] . "<br>";
}

// Displaying the array elements using a while loop
echo "<h2>Displaying Array Elements Using While Loop:</h2>";
$i = 0;
while ($i < count($students)) {
    echo "Name: " . $students[$i]['name'] . ", Marks: " . $students[$i]['marks'] . "<br>";
    $i++;
}

// Displaying the array elements using a do-while loop
echo "<h2>Displaying Array Elements Using Do-While Loop:</h2>";
$i = 0;
do {
    echo "Name: " . $students[$i]['name'] . ", Marks: " . $students[$i]['marks'] . "<br>";
    $i++;
} while ($i < count($students));
?>