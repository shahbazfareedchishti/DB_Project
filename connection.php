<?php
$servername = "localhost";
$username = "username";
$password = "password";
$databasename="database name";
$conn = mysqli_connect('localhost', 'root', '','final');
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>