<?php
$host = '127.0.0.1';   // Cloud Run TCP host
$port = 3306;          // MySQL default port
$username = 'dragonlair214';
$password = '02152002Dragon';  // your Cloud SQL root password
$dbname = 'online_counseling_db';

$mysqli = new mysqli($host, $username, $password, $dbname, $port);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
