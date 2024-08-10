<?php
    $value = $_POST["flower_id"];
    $desc = $_POST["flower_desc"];

    $servername = "localhost";
    $username = "";
    $password = "";
    $database = "test";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $value; 

    $sql = "UPDATE bouquet SET descriere=? WHERE id=?";

    $stmt = $conn->prepare($sql);


    $stmt->bind_param("si",$desc, $id);

   
    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    
    $conn->close();

?>
