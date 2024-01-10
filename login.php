<?php
include('connection.php');
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'final');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM customer WHERE Email = ? AND Pasword = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['Email'] = $email;
        header('Location: aftersign.php');
        exit();
    } else {
        echo "Invalid email or password, Try again";
    }
    

    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
