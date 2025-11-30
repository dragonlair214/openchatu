<?php
// db_connect.php
declare(strict_types=1);

$host = '34.59.185.201';  // Public IP of your Cloud SQL instance
$user = 'root';            // Your MySQL username
$pass = '02152002Dragonlair';   // Your MySQL password
$db   = 'online_counseling_db';
$port = 3306;              // Default MySQL port

$mysqli = new mysqli($host, $user, $pass, $db, $port);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
