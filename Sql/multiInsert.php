<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO eo (firstname, lastname, email)
VALUES ('John', '100', 'john@example.com');";
$sql .= "INSERT INTO eo (firstname, lastname, email)
VALUES ('Mary', '200', 'mary@example.com');";
$sql .= "INSERT INTO eo (firstname, lastname, email)
VALUES ('Julie', '600', 'julie@example.com')";
if ($conn->multi_query($sql) === TRUE) {
echo "New records created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>