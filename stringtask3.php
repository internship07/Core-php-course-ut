<?php 
echo "<h1 style='font-size: 2em;'>Hello World! Welcome to PHP string functions</h1>";
$statement = "Hello World! Welcome to PHP string functions";
echo "String is: $statement<br><br>";
echo 'Length is: ' . strlen($statement)."<br><br>";
echo 'after replacing world with universe: '. str_replace('World','Universe', $statement)."<br><br>";
echo 'total words in string :' . str_word_count($statement)."<br><br>";
echo "when converted to lower case: " . strtolower($statement)."<br><br>";
echo 'when converted to upper case: ' . strtoupper($statement)."<br><br>";
echo 'capitalizing first letter of each word: '. ucwords($statement). "<br><br>";
echo 'Reversing the string: ' . strrev($statement)."<br><br>";
echo 'Repeating 2 time: ' . str_repeat($statement, 2)."<br><br>";
echo 'Capitalizing first letter: ' . ucfirst($statement)."<br><br>";
?>