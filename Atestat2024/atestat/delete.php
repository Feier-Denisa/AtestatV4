<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql_delete = "DELETE FROM cos";

    if ($conn->query($sql_delete) === FALSE) {
        echo "Error deleting existing data: " . $conn->error;
    }
}


$stmt = $conn->prepare($sql_delete);

if ($stmt->execute()) {
    header("Location: buy.php");
    exit();
}

$stmt->close();

?>