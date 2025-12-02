<?php
// db_connect.php — Cloud Run + Cloud SQL (MySQL)
declare(strict_types=1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Cloud SQL INSTANCE CONNECTION NAME
$INSTANCE = 'xenon-crossbar-479105-n3:us-central1:dragonlair214';

// Use Cloud SQL Unix socket
$DB_HOST = sprintf('/cloudsql/%s', $INSTANCE);

// MySQL user + password
$DB_USER = 'root';
$DB_PASS = '02152002Dragon';
$DB_NAME = 'online_counseling_db';

// Connect using socket (no IP!)
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Set charset
$conn->set_charset('utf8mb4');
