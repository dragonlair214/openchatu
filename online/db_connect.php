<?php
$host = '127.0.0.1';
$port = 3306;
$username = 'root';
$password = '02152002Dragon';  // Cloud SQL root password
$dbname = 'online_counseling_db';

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
