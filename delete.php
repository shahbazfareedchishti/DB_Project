<?php

$servername = "localhost";
$username = "username";
$password = "password";
$databasename = "database name";
$conn = mysqli_connect('localhost', 'root', '', 'final');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['checkout'])) {
    
    // Perform a DELETE query to delete all records from the 'cart' table
    $deleteQuery = "DELETE FROM cart";
    $result = mysqli_query($conn, $deleteQuery);

    if (!$result) {
        die('Error: ' . mysqli_error($conn));
    }

    // Redirect to a confirmation page or any other page after successful deletion
    header('Location: orderplace.php');
    exit();
}

?>
