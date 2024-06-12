<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testproject";  // Ensure this matches the database name you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$gender = $_POST['gender'];
$standard = $_POST['standard'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$father_name = $_POST['father_name'];
$father_mobile = $_POST['father_mobile'];
$email = $_POST['email'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO students (name, gender, standard, dob, age, father_name, father_mobile, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssisss", $name, $gender, $standard, $dob, $age, $father_name, $father_mobile, $email);

// Execute statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
