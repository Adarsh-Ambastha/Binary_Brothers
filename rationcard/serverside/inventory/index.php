<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
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
                        <a href="../order/" class="pure-menu-link">Orders</a>
                    </li>
                    <li class="pure-menu-item">
                        <a href="../inventory/" class="pure-menu-link active">Inventory</a>
                    </li>
                    <li class="pure-menu-item">
                        <a href="#" class="pure-menu-link">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pure-u-20-24">
            <h1 style="margin-top: 0.5em; color: white;">&nbsp;Inventory</h1>
        </div>
    </div>
    <div id="inventorylist">
        <table class="pure-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Product</th>
                    <th>Product Code</th>
                    <th>In Stock</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="assets/rice.jpg" alt="Rice">
                    </td>
                    <td>RTNO123202303493</td>
                    <td>
                        34 KG
                        <a href="#">Restock</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>