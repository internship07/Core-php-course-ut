<?php
// Start the session
session_start();

// Check if bank details are set in the session
if (isset($_SESSION['bank_details'])) {
    echo "<h2>Bank Details:</h2>";
    foreach ($_SESSION['bank_details'] as $key => $value) {
        echo ucfirst(str_replace('_', ' ', $key)) . ": " . $value . "<br>";
    }
} else {
    echo "No bank details found in the session.<br>";
}
?>