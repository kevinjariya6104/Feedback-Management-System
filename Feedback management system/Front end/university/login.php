<?php
// Database configuration
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = "6104"; // Change this to your MySQL password
$database = "feedback"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    // Get email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to check if the email and password match
    $sql = "SELECT * FROM university_data WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    // //Check if the query returned any rows
    // if ($result->num_rows > 0) {
    //     // Login successful
    //     echo "Login successful";
        
    //     exit();
    // } else {
    //     // Login failed
    //     echo "Invalid email or password!";
    // }
    if ($result->num_rows > 0) {
        // If credentials are correct, redirect to the desired page
        header('Location: /university/u_dashboard/index.html');
        exit;
    } else {
        // If credentials are incorrect, display an error message
        echo "Invalid username or password. Please try again.";
    }


// Close connection
$conn->close();
?>
