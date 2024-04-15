<?php
// Retrieve data sent from the frontend
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to MySQL database
$servername = "localhost";
$username = "asd";
$password = "qwe";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into MySQL database (for register page)
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Authenticate user (for login page)
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "User authenticated successfully";
} else {
    echo "Invalid username or password";
}

$conn->close();
?>
