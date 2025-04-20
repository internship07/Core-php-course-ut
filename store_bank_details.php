<?php
// Start the session
session_start();

// Store bank details in the session
$_SESSION['bank_details'] = [
    'account_holder' => 'John Doe',
    'account_number' => '1234567890',
    'bank_name' => 'ABC Bank',
    'branch' => 'Downtown',
    'ifsc_code' => 'ABC123456'
];

echo "Bank details have been stored in the session.<br>";
?>