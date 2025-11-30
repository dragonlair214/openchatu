<?php
$host = '34.59.185.201';
$port = 3306;
$username = 'root';
$password = '02152002Dragon';
$dbname = 'online_counseling_db';

$mysqli = new mysqli($host, $username, $password, $dbname, $port);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
