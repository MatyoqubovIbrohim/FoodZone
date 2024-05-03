<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=foodzone", $username, $password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $a=1;
$stmt = $conn->prepare(
  "SELECT * FROM people"
);
$stmt->execute();
$comments = $stmt->fetchAll();

$tmt = $conn->prepare(
  "SELECT * FROM foods"
);
$tmt->execute();
$foods = $tmt->fetchAll();
// var_dump($foods);
// $tmt =