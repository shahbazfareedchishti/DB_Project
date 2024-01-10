<?php

$servername = "localhost";
$username = "username";
$password = "password";
$databasename="database name";
$conn = mysqli_connect('localhost', 'root', '','final');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkUsername'])) {
    $usernameToCheck = $_POST['username'];

    $sql = "SELECT COUNT(*) as count FROM customer WHERE Username = '$usernameToCheck'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];

        if ($count > 0) {
            echo "Username already exists. Please choose a different one.";
        } else {
            echo "Username is available.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_free_result($result);
}

$Firstname = "";
$LastName = "";
$Email = "";
$Phone = "";
$Username = "";
$Pasword = "";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $Firstname = $_POST['Firstname'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Username = $_POST['Username'];
    $Pasword = $_POST['Pasword'];
    $sql = "INSERT INTO customer (Firstname, LastName, Email, Phone, Username, Pasword) 
        VALUES ('$Firstname', '$LastName', '$Email', '$Phone', '$Username', '$Pasword')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Error: ' . mysqli_error($conn));
    }
}
    header('Location: aftersign.php');
?>
