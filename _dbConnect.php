<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'classes';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "Connection Unsucessful can not connect beacuse ---> " . mysqli_connect_error();
}
?>