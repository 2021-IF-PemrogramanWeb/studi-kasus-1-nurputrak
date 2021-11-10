<?php

$servername = "localhost";
$username = "id17919566_root";
$password = "^Dc>SkUV9a>][sI}";
$dbname = "id17919566_hoteldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>