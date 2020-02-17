<?php
$servername = "localhost";
$username = "consilio_bot";
$password = "3comicN*!b.";
$dbname = "consilio_management";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO enquiries (name, email, phone, message, date) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone, $message, $date);
echo "New records created successfully";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$date = date("Y-m-d");
$stmt->execute();
$stmt->close();
$conn->close();
?>
