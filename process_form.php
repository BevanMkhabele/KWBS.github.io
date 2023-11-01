<?php
// Database configuration
$host = "localhost"; // Replace with your MySQL host
$username = "your_username"; // Replace with your MySQL username
$password = "your_password"; // Replace with your MySQL password
$database = "registration_data"; // Replace with your database name

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $conn->real_escape_string($_POST["name"]);
    $surname = $conn->real_escape_string($_POST["surname"]);
    $id_number = $conn->real_escape_string($_POST["id_number"]);
    $school = $conn->real_escape_string($_POST["school"]);

    // You can perform validation and sanitization of the data here as needed.

    // Insert data into the database
    $sql = "INSERT INTO form_data (name, surname, id_number, school) VALUES ('$name', '$surname', '$id_number', '$school')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a thank you page or any other page you want
        header("Location: complete.html");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
