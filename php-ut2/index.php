<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ultimez_internship_tasks"; // Updated DB name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Search Logic
$search = isset($_GET['search']) ? $_GET['search'] : "";
$searchQuery = $search ? "WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR city LIKE '%$search%' OR country LIKE '%$search%' OR mobile_number LIKE '%$search%'" : "";

// Pagination Logic
$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$totalQuery = "SELECT COUNT(*) FROM tbl_customers $searchQuery";
$totalResult = $conn->query($totalQuery);
$totalCount = $totalResult->fetch_array()[0];
$totalPages = ceil($totalCount / $limit);

// Fetch Data
$query = "SELECT * FROM tbl_customers $searchQuery ORDER BY date_n_time DESC LIMIT $start, $limit";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Customer List</h1>

    <!-- Search Form -->
    <form method="GET">
        <input type="text" name="search" placeholder="Search by Name, City, or Mobile Number" value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Search</button>
        <button type="button" onclick="window.location.href='index.php'">Reset</button>
    </form>

    <!-- Customer Table -->
    <table border="1">
        <tr>
            <th>Serial Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
            <th>Country</th>
            <th>Mobile Number</th>
            <th>Date & Time</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            $serial = $start + 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$serial}</td>
                        <td>{$row['first_name']}</td>
                        <td>{$row['last_name']}</td>
                        <td>{$row['city']}</td>
                        <td>{$row['country']}</td>
                        <td>{$row['mobile_number']}</td>
                        <td>{$row['date_n_time']}</td>
                    </tr>";
                $serial++;
            }
        } else {
            echo "<tr><td colspan='7'>No data found</td></tr>";
        }
        ?>
    </table>
<br><br>
    <!-- Pagination -->
    <div class="pagination">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?= $i ?>&search=<?= urlencode($search) ?>" <?= ($i == $page) ? "class='active'" : "" ?>><?= $i ?></a>
        <?php endfor; ?>
    </div>

</body>
</html>