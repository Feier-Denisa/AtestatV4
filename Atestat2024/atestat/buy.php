<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel ="stylesheet" href="stylebuy.css">
        <title>Buy</title>
    </head>
    <body>
        <header>
            <div class = "nav-content">
                <a href="\atestat\admin.php">Flori de Mai</a>
            </div>
            
            <nav class = "navbar">
                <a href ="\atestat\index.php">Home</a>
                <a href ="\atestat\shop.html">Shop</a>
                <a href ="\atestat\special.html">Special Occasions</a>
                <a href ="\atestat\buy.php">Buy</a>
            </nav>
        </header>
        <section class ="buy" id="buy" style = "font-weight: 500; font-size: 120%;">
            <?php

                $servername = "localhost";
                $username = "";
                $password = "";
                $dbname = "test";
                $sum = 0;
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM cos";   

                $result = $conn->query($sql);  
                echo "<form method = 'POST' action = 'delete.php'><table width = 760px >";
                echo "<tr><td colspan='2'><center>Name : <input type = 'textbox' style = 'background-color: rgb(255, 245, 217,.50);border-color: rgb(222, 129, 37);'></center></td></tr>";
                echo "<tr><td colspan='2'><center>Address : <input type = 'textbox' style = 'background-color: rgb(255, 245, 217,.50);border-color: rgb(222, 129, 37);'></center></td></tr>";
                echo "<tr><td colspan='2' style = 'background-color: rgb(233, 216, 184,.0);border : none;'> </td></tr>";
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td style = 'padding-right:30px; padding-top:5px'>".$row["nume"]."</td><td><center>$".$row["pret"]."</center></td></tr>";
                        $sum = $sum + $row["pret"];
                    }
                }
                echo "<tr><td style = 'border-color :rgba(222, 129, 37, .0) ;background-color :rgb(255, 245, 217,.0)'>
                <center><input type = 'submit' value = 'buy' style = 'padding-left: 30px;padding-right: 30px;padding-top: 10px;padding-bottom: 10px; border-radius: 30px; background-color: rgb(233, 216, 184,.75);border : none;font-weight: bold'></center></td>
                <td><center> Total : $".$sum."<center></td></tr>"; 
                echo "</table></form>";
                
            ?>
        </section>
    </body>
</html>