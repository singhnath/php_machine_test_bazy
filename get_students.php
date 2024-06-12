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

// Fetch students
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

$students = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

// Convert to JSON and output
echo json_encode($students);

// Close connection
$conn->close();
?>
