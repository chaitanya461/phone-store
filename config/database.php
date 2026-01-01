
<?php
// Database configuration
define('DB_HOST', getenv("DB_HOST") ?: 'localhost');
define('DB_USER', getenv("DB_USER") ?: 'root');
define('DB_PASSWORD', getenv("DB_PASSWORD") ?: '');
define('DB_NAME', getenv("DB_NAME") ?: 'phone_store');

// Create connection
function getDatabaseConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

// Start session if not started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
