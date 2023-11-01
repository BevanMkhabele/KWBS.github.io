<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $id_number = $_POST["id_number"];
    $school = $_POST["school"];

    // You can perform validation and sanitization of the data here as needed.

    // Store the data in a file or a database
    $data = "Name: $name\nSurname: $surname\nSA ID Number: $id_number\nSchool Name: $school\n";

    // Define the file path where you want to save the data
    $file_path = "form_data.txt";

    // Append the data to the file (you can also use a database to store data)
    file_put_contents($file_path, $data, FILE_APPEND);

    // Redirect to a thank you page or any other page you want
    header("Location: complete.html");
    exit;
}
?>
