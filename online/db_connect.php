<?php
$host = '127.0.0.1';   // TCP host inside Cloud Run
$port = 3306;
$username = 'root';
$password = '02152002Dragon';  // your Cloud SQL root password
$dbname = 'online_counseling_db';

$mysqli = new mysqli($host, $username, $password, $dbname, $port);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
