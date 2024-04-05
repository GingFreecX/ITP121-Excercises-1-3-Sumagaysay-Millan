<?php
// Dummy username and password (you should replace these with your actual authentication mechanism)
$valid_username = "user";
$valid_password = "password";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password
    if ($username == $valid_username && $password == $valid_password) {
        // If credentials are correct, display success message
        echo "<h3>Login successful! Welcome, $username!</h3>";
    } else {
        // If credentials are incorrect, display error message
        echo "<h3>Login failed! Invalid username or password.</h3>";
    }
}

