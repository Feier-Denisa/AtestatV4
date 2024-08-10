<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Special Occasions Confirm</title>
    </head>


<body style = "display: flex; align-items: center; min-height: 90vh; 
               background: url(/atestat/bg.jpg) no-repeat;
               background-size: cover;
               background-position: center;
               padding-left :35%;
               padding-right :35%;
               font-size: 22px;">
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
            if(isset($_POST['FLOWER'])) {
                $selectedFlower = $_POST['FLOWER'];

                $sql = "SELECT * FROM bouquet WHERE nume = '$selectedFlower'";
                
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                
                        $nume = $row["nume"];
                        $pret = $row["pret"];
                        $sql_cos = "INSERT INTO cos (nume , pret) VALUES ('".$nume."',".$pret.")";
                        $conn->query($sql_cos);
                    }
                }
            } 


            $stmt = $conn->prepare($sql);

            if ($stmt->execute()) {
                header("Location: buy.php");
                exit();
            }
        
            $stmt->close();
            

        }

    ?>

</section>
</body>
</html>