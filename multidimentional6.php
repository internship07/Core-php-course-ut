<?php
echo "<h1>Multidimensional Array</h1>";

// Creating a multidimensional indexed array
$details = [
    ['name' => 'John', 'address' => 'New York', 'age' => 25, 'gender' => 'Male'],
    ['name' => 'Alice', 'address' => 'Los Angeles', 'age' => 30, 'gender' => 'Female'],
    ['name' => 'Mike', 'address' => 'Chicago', 'age' => 28, 'gender' => 'Male']
];

// Displaying the initial array
echo "<h2>Initial Array:</h2>";
echo '<pre>';
print_r($details);
echo '</pre>';

// Adding another array with the fields: name, address, age, and gender
$details[] = ['name' => 'Ash', 'address' => 'Tokyo', 'age' => 20, 'gender' => 'Male'];

// Deleting the first array item from the zeroth index
unset($details[0]);

// Re-indexing the array after deletion
$details = array_values($details);

// Displaying only the cities (addresses)
echo "<h2>Displaying Cities:</h2>";
foreach ($details as $detail) {
    echo $detail['address'] . "<br>";
}

// Displaying the entire array from the last index
echo "<h2>Displaying Entire Array from Last Index:</h2>";
for ($i = count($details) - 1; $i >= 0; $i--) {
    echo '<pre>';
    print_r($details[$i]);
    echo '</pre>';
}
echo "<h2>Associative Array:</h2>";
// Adding a multidimensional associative array for product details
$productDetails = [
    [
        'product_name' => 'Laptop',
        'price' => 1500,
        'date' => '03-01-2024',
        'address' => 'Bangalore'
    ],
    [
        'product_name' => 'Mobile',
        'price' => 800,
        'date' => '03-02-2024',
        'address' => 'Mumbai'
    ]
];
echo "After adding product details:<br>";
// Adding another array with the values: TV, 2008, 6 January 2024, Hubli
$productDetails[] = [
    'product_name' => 'TV',
    'price' => 2008,
    'date' => '06-01-2024',
    'address' => 'Hubli'
];

// Displaying the multidimensional associative array
echo "<h2>Product Details:</h2>";
echo '<pre>';
print_r($productDetails);
echo '</pre>';
// Displaying the first array item from the $details array
echo "<h2>First Array Item:</h2>";
echo '<pre>';
print_r($details[0]);
echo '</pre>';
// Displaying the product name of the item with the date 06-01-2024
echo "<h2>Product Name for Date 06-01-2024:</h2>";
foreach ($productDetails as $product) {
    if ($product['date'] === '06-01-2024') {
        echo "Product Name: " . $product['product_name'] . "<br>";
        break; // Exit the loop once the product is found
    }
}
// Displaying the last array item from the $productDetails array
echo "<h2>Last Array Item:</h2>";
echo '<pre>';
print_r(end($productDetails));
echo '</pre>';
?>