<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>
<body>


<?php
$servername = "sql11.freemysqlhosting.net";
$username = "sql11499127";
$password = "DivrqUnUi4";
$dbname = "sql11499127";

$jmeno = "Lukas";
$prijmeni = "Cech";
$body = 5;
$datum = date("Y/m/d");
$cas = date("H:i:s");

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO kviz (jmeno, prijmeni, body, datum, cas)
VALUES ('$jmeno', '$prijmeni', '$body', '$datum', '$cas')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

  
</body>
</html>