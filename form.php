<?php
include("connectdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];

	$sql = "INSERT INTO people (fullname, email, number, subject, message) VALUES (?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$name, $email, $number, $subject, $text]);

	header('location: index.php');
}
