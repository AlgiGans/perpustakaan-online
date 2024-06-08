<?php
$username = $_POST['user'];
$password = $_POST['pass'];

// Replace with your actual validation logic (database connection, etc.)
$validUsername = "Algi";
$validPassword = "123";

if ($username === $validUsername && $password === $validPassword) {
    // Credentials are valid, redirect to protected page
    header("Location: admin.html");
    exit;
} else {
    // Credentials are invalid, display error message
    echo "Invalid username or password. Please try again.";
}
?>