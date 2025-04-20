<?php 
echo "<h1>Array</h1>";
$indexed = ['225','Dreams','Glass','30','25','1','Globe'];
$associative = array('0'=>'Couch','Ice'=>'India','6'=>'Box','Trip'=>'Range');
echo '<pre>';
print_r($indexed);
print_r($associative);

// Accessing the third value from the indexed array
echo "The third value in the indexed array is: " . $indexed[2] . "<br>";

// Accessing the value associated with the 'Ice' key in the associative array
echo "The value associated with the 'Ice' key in the associative array is: " . $associative['Ice'] . "<br>";

echo "After merging: ";
$arr3 = array_merge($indexed, $associative);
print_r($arr3);
?>