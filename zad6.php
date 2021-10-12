<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uczniowie";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Nie działa: " . $conn->connect_error);
  }
  
$sql = "SELECT * FROM uczniowie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["Imie"]. "<br>" .$row["Nazwisko"];
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
