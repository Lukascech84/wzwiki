<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabulka</title>
    <style type="text/css">
    table {
      border-collapse: collapse;
      width: 100%;
      color: #d96459;
      font-family: monospace;
      font-size: 25px;
      text-align: left;
    }
    th{
      background-color: #d96459;
      color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
  </style>
</head>
<body>
<table>
    <tr>
        <th>Jméno</th>
        <th>Příjmení</th>
        <th>Počet bodů</th>
        <th>Datum</th>
        <th>Čas</th>
    </tr>   
<?php 
$servername = "sql11.freemysqlhosting.net";
$username = "sql11499127";
$password = "DivrqUnUi4";
$dbname = "sql11499127";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT jmeno, prijmeni, body, datum, cas FROM kviz"; 
  $result = $conn-> query($sql);

  if($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["jmeno"] ."</td><td>". $row["prijmeni"] ."</td><td>". $row["body"] . "</td><td>" . $row["datum"] ."</td><td>" . $row["cas"] ."</td></tr>";
    }
    echo "</table>";
  }
  $conn-> close();
?>



</body>
</html>