<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'Task';
$conn = mysqli_connect($server, $username, $password, $database);

if ($conn) {
    echo "Connection successful!!<br>";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}

// Insert data
$insert1 = "INSERT INTO `country`(`country_name`, `country_capital`, `famous_place`) VALUES ('India','Delhi','Taj Mahal')";
$insert2 = "INSERT INTO `country`(`country_name`, `country_capital`, `famous_place`) VALUES ('Japan','Tokyo','Tokyo Tower')";
$insert3 = "INSERT INTO `country`(`country_name`, `country_capital`, `famous_place`) VALUES ('Korea','Seoul','Namsan Tower')";
$insert4 = "INSERT INTO `country`(`country_name`, `country_capital`, `famous_place`) VALUES ('UAE','Dubai','Burj Khalifa')";
$insert5 = "INSERT INTO `country`(`country_name`, `country_capital`, `famous_place`) VALUES ('England','London','London Bridge')";

if (mysqli_query($conn, $insert1) && mysqli_query($conn, $insert2) && mysqli_query($conn, $insert3) && mysqli_query($conn, $insert4) && mysqli_query($conn, $insert5)) {
    echo "Data inserted successfully!!<br>";
} else {
    echo "Data insertion failed: " . mysqli_error($conn);
}

// Fetch data
$fetch = "SELECT * FROM `country`";
$result = mysqli_query($conn, $fetch);

if ($result) {
    $userdata = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo "Fetched the records:<br>";
    echo "<pre>";
    print_r($userdata);
    echo "</pre>";
} else {
    echo "Data fetching failed: " . mysqli_error($conn);
}
?>