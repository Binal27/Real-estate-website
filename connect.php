<?php

$db_host = "localhost";
$db_name = "home_db";
$db_user_name = "root";
$db_user_pass = "";

try {
    // Correcting the DSN (Data Source Name)
    $conn = new PDO("$db_host, $db_user_name, $db_user_pass, $db_name");

    // Setting PDO attributes for error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database connection successful!";
} catch (PDOException $e) {
    // Handling connection errors
    die("Database connection failed: " . $e->getMessage());
}

// Function to create a unique ID
function create_unique_id() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 20; $i++) {
        $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>