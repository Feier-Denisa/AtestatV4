<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Special Occasions</title>
    </head>


<body style ="  background: url(/atestat/bg3.jpg) no-repeat;
                background-size: cover;">
    <center>
    <header style="padding : 30px">
        <h1>Welcome to the Admin page</h1>
    </header>

    <form  method = "POST" action = "admin2.php">
    <table border = "2px" height = 500px width = "500px" style= "background-color : rgb(156, 189, 211,.50)">
        <tr>
            <td style = "padding-left:10px">Whose description you want to change? - 
            <select name = "flower_id">
                <?php
                $servername = "localhost"; 
                $username = "";
                $password = "";
                $dbname = "test";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                    
                $sql = "SELECT * FROM bouquet";   

                $result = $conn->query($sql);  

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option id='Rose Bouquet' value='".$row["id"]."'>".$row["nume"]."</option>";
                    }
                } 
                
                ?>

            </select></td>
        </tr>
        <tr>
            <td style = "padding-left:10px">New description - <input type = "textbox" name = "flower_desc"></td>
        </tr>
        <tr>
            <td style = "padding-left:210px ;"><input type = "submit" style = " border: none;padding-left: 20px;padding-right: 20px;padding-top: 5px;padding-bottom: 5px; border-radius: 20px;"></td>
        </tr>
    </table>
    </form>
    </center>
</body>
    
</html>