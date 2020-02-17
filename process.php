<!DOCTYPE html>

<html>


<head>
<link href="style.css" rel="stylesheet">

<div class="formHeader" style="background:url(./images/contactus.jpg); height:100vh;background-repeat:no-repeat;">
  <div class="formOverlay">
  <h1 class="processHeader">
    Your Message was Submitted
  </h1>

  <h2 class="processSubheader">Our Team will respond as soon as possible!</h2>

  <a style="top:70% !important;" onclick="document.getElementById('header').remove();document.getElementById('pricediag').style.display = 'inline-block';" class="cta" id="one-off" href="index.php">Return Home</a>

</div>
</div>

</head>

<body>



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
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$date = date("Y-m-d");
$stmt->execute();
$stmt->close();
$conn->close();
?>

<?
include('footer.php');
?>

</body>
<html>
