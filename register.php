<?php
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

$userName = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
// Check if email already exists
$sql_check_email = "SELECT * FROM users WHERE email='$email'";
$result_check_email = $conn->query($sql_check_email);

if ($result_check_email->num_rows > 0) {
    die("Email already exists.");
}

// Check if passwords match
if ($password1 !== $confirmPassword) {
    die("Passwords do not match.");
}



// Insert data into database
$sql = "INSERT INTO users (username, email, password)
        VALUES ('$userName', '$email', '$password1')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
    echo "Thank you for registering, " . $userName . "!<br>"; 
	echo "You'll be redirected to login page in 3 seconds"; 
	header("refresh:3;url=login1.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
