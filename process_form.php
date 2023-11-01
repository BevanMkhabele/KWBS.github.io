<?php
$host = "localhost"; // Replace with your MySQL host
$username = "your_mysql_username"; // Replace with your MySQL username
$password = "your_mysql_password"; // Replace with your MySQL password
$database = "registration_data"; // Replace with your database name
$table = "form_data"; // Replace with your table name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $surname = $conn->real_escape_string($_POST["surname"]);
    $id_number = $conn->real_escape_string($_POST["id_number"]);
    $school = $conn->real_escape_string($_POST["school"]);

    $sql = "INSERT INTO $table (name, surname, id_number, school) VALUES ('$name', '$surname', '$id_number', '$school')";

    if ($conn->query($sql) === TRUE) {
        header("Location: complete.html");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
