<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/grids-responsive-min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include '../components/header.php'; ?>
    <div class="pure-g">
        <div class="pure-u-4-24">
            <div class="pure-menu custom-restricted-width">
                <ul class="pure-menu-list">
                    <li class="pure-menu-item">
                        <a href="../order/" class="pure-menu-link active">Orders</a>
                    </li>
                    <li class="pure-menu-item">
                        <a href="../inventory/" class="pure-menu-link">Inventory</a>
                    </li>
                    <li class="pure-menu-item">
                        <a href="#" class="pure-menu-link">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pure-u-20-24">
            <h1 style="margin-top: 0.5em; color: white;">&nbsp;Orders</h1>
        </div>
    </div>
    <div id="orderlist">
        <table class="pure-table">
            <thead>
                <tr>
                    <th>SNo.</th>
                    <th>Order ID</th>
                    <th>Product ID</th>
                    <th>Ration Number</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "rationcard";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT orderid, productNumber FROM ordertable";
                    $result = $conn->query($sql);
                    $counter = 1;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>".$counter."</td>
                                    <td>".$row['orderid']."</td>
                                    <td>".$row['productNumber']."</td>
                                    <td>1232023034</td>
                                    <td>Yet to be processed</td>
                                </tr>";
                            $counter = $counter + 1;
                        }
                    } else {
                        echo "0 results";
                    }

                    $conn->close();
                    ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>