<?php
// db_connect.php — mysqli connection for Cloud Run + Cloud SQL
$host = '127.0.0.1';       // Cloud SQL TCP host inside Cloud Run
$port = 3306;              // default MySQL port
$username = 'root';
$password = '02152002Dragon';
$dbname = 'online_counseling_db';

$mysqli = new mysqli($host, $username, $password, $dbname, $port);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
