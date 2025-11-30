<?php
// db_connect.php — mysqli connection
$host = '/cloudsql/xenon-crossbar-479105-n3:us-central1:openchatu-sql';
$username = 'root';
$password = '02152002Dragon';   // replace with the actual root password you set for Cloud SQL
$dbname = 'online_counseling_db';

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
