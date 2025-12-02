<?php
// db_connect.php
declare(strict_types=1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// ==== CLOUD SQL (PUBLIC IP) CONFIG ====
// Cloud SQL PUBLIC IP
$DB_HOST = '34.59.185.201';
$DB_PORT = 3306;

// Your Cloud SQL user + password
$DB_USER = 'root';
$DB_PASS = '02152002Dragon';

// Your database name
$DB_NAME = 'online_counseling_db';

// Create connection
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

// Set charset
$conn->set_charset('utf8mb4');

// Optional debug
// echo "Database connected successfully!";
