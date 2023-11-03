<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost"; // Replace with your actual database server name
    $username = "root"; // Replace with your actual database username
    $password = ""; // Replace with your actual database password
    $dbname = "registration_data"; // Replace with your actual database name

    // Create a database connection
    $conn = new mysqli('localhost', 'root', '', 'registration_data');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $id_number = $_POST["id_number"];
    $school = $_POST["school"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO user_data (name, surname, id_number, school) VALUES (?, ?, ?, ?)";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind the form data to the SQL statement
    $stmt->bind_param("ssss", $name, $surname, $id_number, $school);

    // Execute the statement
    if ($stmt->execute()) {
        // Data inserted successfully
        header("Location: complete.html"); // Redirect to a success page
    } else {
        // Error in data insertion
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect to the form page if the form wasn't submitted
    header("Location: your_form_page.html");
}
?>
