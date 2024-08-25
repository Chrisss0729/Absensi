<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'absensi_db';

// Create connection
$mysqli = new mysqli($host, $user, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Set the starting day of the month (YYYY-MM-DD format)
$starting_day = '2024-08-15'; // Ganti dengan tanggal yang diinginkan
?>
