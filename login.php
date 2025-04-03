<?php
session_start();

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ip";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found
    $row = $result->fetch_assoc();
    if ($password === $row['password']) {// Password correct, redirect to dashboard or home page
        setcookie('user_email', $email, time() + (86400 * 30), "/"); // Cookie expires in 30 days
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
    } else {
        // Credentials incorrect
        echo "Incorrect email or password.";
    }
} else {
    // Credentials incorrect
    echo "Incorrect email or password.";
}

$conn->close();
?>
