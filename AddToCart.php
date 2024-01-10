<?php
$servername = "localhost";
$username = "username";
$password = "password";
$databasename = "database name";
$conn = mysqli_connect('localhost', 'root', '', 'final');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Item = "";
$Descrip = "";
$Price = "";

if (isset($_POST['save'])) {
    $Item = $_POST['Item'];
    $Descrip = $_POST['Descrip'];
    $Price = $_POST['Price'];

    $sql = "INSERT INTO cart (Item, Descrip, Price) 
        VALUES ('$Item', '$Descrip', '$Price')";

    $sql2 = "INSERT INTO all_sales (Item, Descrip, Price) 
    VALUES ('$Item', '$Descrip', '$Price')";

    $result = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql2);

    if (!$result) {
        die('Error: ' . mysqli_error($conn));
    }

    // Redirect to menu.php after successful form submission
    header('Location: menu.php');
    exit(); 
}
?>
