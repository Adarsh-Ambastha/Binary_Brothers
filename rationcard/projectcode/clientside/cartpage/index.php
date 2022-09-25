<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-bottom">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/grids-responsive-min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="pure-g" style="margin-top: 0.5em">
    <div class="pure-u-2-5">
        <h1>Cart</h1>
    </div>
</div>
<div class="pure-g">
    <div class="pure-u-2-5">
        Review Items
    </div>
    <div class="pure-u-3-5" style="text-align: right;">
        #ORD001
    </div>
</div>
<hr/>

<div id="cartlist">
    <div class="pure-g items">
        <div class="pure-u-1-24">
            1.
        </div>
        <div class="pure-u-4-24">
            <img src="assets/rice.png" alt="Rice">
        </div>
        <div class="pure-u-10-24">
            <h2>RICE</h2>
            10 KG
        </div>
        <div class="pure-u-4-24">
            <button>-&nbsp;&nbsp;1&nbsp;&nbsp;+</button>
        </div>
        <div class="pure-u-4-24" style="text-align: center">
            Rs. 7
        </div>
    </div>
    <div class="pure-g items">
        <div class="pure-u-1-24">
            2.
        </div>
        <div class="pure-u-4-24">
            <img src="assets/kerosene.png" alt="Rice">
        </div>
        <div class="pure-u-10-24">
            <h2>KEROSENE</h2>
            1 L
        </div>
        <div class="pure-u-4-24">
            <button>-&nbsp;&nbsp;1&nbsp;&nbsp;+</button>
        </div>
        <div class="pure-u-4-24" style="text-align: center">
            Rs. 30
        </div>
    </div>
    <div class="pure-g items" style="margin-left: 0.75em">
        <div class="pure-u-1-24">
            3.
        </div>
        <div class="pure-u-4-24">
            <img src="assets/sugar.png" alt="Rice">
        </div>
        <div class="pure-u-10-24">
            <h2>SUGAR</h2>
            10 KG
        </div>
        <div class="pure-u-4-24">
            <button>-&nbsp;&nbsp;1&nbsp;&nbsp;+</button>
        </div>
        <div class="pure-u-4-24" style="text-align: center">
            Rs. 130
        </div>
    </div>
    <div class="pure-g items" style="margin-left: 0.75em">
        <div class="pure-u-1-24">
            4.
        </div>
        <div class="pure-u-4-24">
            <img src="assets/wheat.png" alt="Rice">
        </div>
        <div class="pure-u-10-24">
            <h2>WHEAT</h2>
            10 KG
        </div>
        <div class="pure-u-4-24">
            <button>-&nbsp;&nbsp;1&nbsp;&nbsp;+</button>
        </div>
        <div class="pure-u-4-24" style="text-align: center">
            Rs. 83
        </div>
    </div>
</div>
<hr/>

<div id="billing">
    <div class="pure-g">
        <div class="pure-u-2-5">
            <h1 style="font-size: 1.5em;">Bill Details</h1>
        </div>
    </div>
    <div class="pure-g">
        <div class="pure-u-15-24" style="margin-left: 0.5em">
            <p>Total Quantity</p>
        </div>
        <div class="pure-u-8-24" style="padding-left: 0.75em">
            <p>4</p>
        </div>
    </div>
    <div class="pure-g">
        <div class="pure-u-1-24"></div>
        <div class="pure-u-15-24">
            <p>Item Total</p>
        </div>
        <div class="pure-u-8-24">
            <p>Rs. 250</p>
        </div>
    </div>
    <div class="pure-g">
        <div class="pure-u-1-24"></div>
        <div class="pure-u-15-24">
            <p>Transportation Charge</p>
        </div>
        <div class="pure-u-8-24">
            <p>Rs. 0</p>
        </div>
    </div>
    <hr/>
    <div class="pure-g" style="margin-top: 0.5em">
        <div class="pure-u-1-24"></div>
        <div class="pure-u-15-24">
            <p>SubTotal</p>
        </div>
        <div class="pure-u-8-24">
            <p>Rs. 250</p>
        </div>
    </div>
    <hr/>
</div>

<form action="../components/sendorder.php"  method="POST">
    <input type="text" id="orderdata" name="orderdata" value="SKU001,1,SKU006,1,SKU002,1,SKU003,1" hidden readonly>
    <input type="submit" class="pure-button pure-button-primary" value="Place Order">
</form>

</body>
</html>