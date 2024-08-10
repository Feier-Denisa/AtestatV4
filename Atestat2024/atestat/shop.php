<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

$sum = 0;
$numec = "Custom bouquet :";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql_delete = "DELETE FROM comanda";

    if ($conn->query($sql_delete) === FALSE) {
        echo "Error deleting existing data: " . $conn->error;
    }

    $rose = $_POST["rose"];
    $sunflower = $_POST["sunflower"];
    $daisy = $_POST["daisy"]; 
    $tulip = $_POST["tulip"];
    $periwinkle = $_POST["periwinkle"];   
    $poppy = $_POST["poppy"];
    $iris = $_POST["iris"];
    $daffodil = $_POST["daffodil"];

    $sql_rose = "INSERT INTO comanda (id, nume, img, cantitate, pret) VALUES ('1','Rose','/atestat/images/rose.jpg', $rose,'4.99')";
    $sql_sunflower = "INSERT INTO comanda (id, nume, img, cantitate, pret) VALUES ('2','Sunflower','/atestat/images/sunflower.jpg', $sunflower ,'5.99')";
    $sql_daisy = "INSERT INTO comanda (id, nume, img, cantitate, pret) VALUES ('3','Daisy','/atestat/images/daisy.jpg', $daisy ,'2.99')";
    $sql_tulip = "INSERT INTO comanda (id, nume, img, cantitate, pret) VALUES ('4','Tulip','/atestat/images/tulip.jpg', $tulip ,'3.99')";
    $sql_periwinkle = "INSERT INTO comanda (id, nume, img, cantitate, pret) VALUES ('5','Periwinkle','/atestat/images/periwinkle.jpg', $periwinkle ,'6.99')";
    $sql_poppy = "INSERT INTO comanda (id, nume, img, cantitate, pret) VALUES ('6','Poppy','/atestat/images/poppy.jpg', $poppy ,'2.99')";
    $sql_iris = "INSERT INTO comanda (id, nume, img, cantitate, pret) VALUES ('7','Iris','/atestat/images/iris.jpg', $iris ,'5.99')";
    $sql_daffodil = "INSERT INTO comanda (id, nume, img, cantitate, pret) VALUES ('8','Daffodil','/atestat/images/daffodil.jpg', $daffodil ,'4.99')";

    if ($conn->query($sql_rose) === TRUE &&
        $conn->query($sql_sunflower) === TRUE &&
        $conn->query($sql_daisy) === TRUE &&
        $conn->query($sql_tulip) === TRUE &&
        $conn->query($sql_periwinkle) === TRUE &&
        $conn->query($sql_poppy) === TRUE &&
        $conn->query($sql_iris) === TRUE &&
        $conn->query($sql_daffodil) === TRUE) {
        
        echo "Bouquet quantities added to the database successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$wrapper = $_POST["wrapper"];
echo "<br>".$wrapper;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['wrapper'])) {

        $sqlwrapper = "SELECT * FROM wrapper WHERE culoare = '$wrapper'";
        
        $result = $conn->query($sqlwrapper);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $wrapperPret = $row["pret"];
            }
        }
    } 
}

if($rose ==  0 &&
    $sunflower == 0 && 
    $daisy == 0 &&
    $tulip == 0 &&
    $periwinkle == 0 &&
    $poppy == 0 &&
    $iris == 0 &&
    $daffodil == 0)
    {
        $conn->error;
        $conn->close();
        header("Location: shop.html");
        exit();
    }
else
    {

    $sum = $sum + $wrapperPret + ($rose * 4.99) + ($sunflower * 5.99) + ($daisy * 2.99) + ($tulip * 3.99) + ($periwinkle * 6.99) + ($poppy * 2.99) + ($iris * 5.99) + ($daffodil * 4.99);
    echo "<br>".$sum;

        if($rose !=  0)
            $numec = $numec." - Rose";
        if($sunflower != 0)
            $numec = $numec." - Sunflower";
        if($daisy != 0)
            $numec = $numec." - Daisy";
        if($tulip != 0)
            $numec = $numec." - Tulip";
        if($periwinkle != 0)
            $numec = $numec." - Periwinkle";
        if($poppy != 0)
            $numec = $numec." - Poppy";
        if($iris != 0)
            $numec = $numec." - Iris";
        if($daffodil != 0)
            $numec = $numec." - Daffodil";

        echo "<br>".$numec;

        $sql_cos = "INSERT INTO cos (nume , pret) VALUES ('".$numec."',".$sum.")";
        $conn->query($sql_cos);

        
        header("Location: buy.php");
        exit();
    }
    
}   

?>
