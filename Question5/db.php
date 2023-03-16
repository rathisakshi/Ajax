<?php
$servername = 'localhost';
$username = 'admin';
$password = 'admin';

// Create connection
$conn = new mysqli( $servername, $username, $password );
// Check connection
if ( $conn->connect_error ) {
    die( 'Connection failed: ' . $conn->connect_error );
}

// Create database
$sql = 'CREATE DATABASE IF NOT EXISTS Movies';
if ( $conn->query( $sql ) === TRUE ) {
    echo 'Database created successfully';
} else {
    echo 'Error creating database: ' . $conn->error;
}

// Create connection
$connn = new mysqli( $servername, $username, $password, 'Movies' );
// Check connection
if ( $connn->connect_error ) {
    die( 'Connection failed: ' . $connn->connect_error );
}

// sql to create table
$sql_tb = "CREATE TABLE items (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
movie_title VARCHAR(30) NOT NULL,
movie_rating INT(2) NOT NULL
)";

if ( $connn->query( $sql_tb ) === TRUE ) {
    echo 'Table items created successfully';
} else {
    echo 'Error creating table: ' . $conn->error;
}

$conn->close();
?>