<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/grids-responsive-min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header" class="pure-g">
        <div class="pure-u-lg-1-5 pure-u-md-1-24"></div>
        <div class="pure-u-lg-3-5 pure-u-md-22-24">
            <img id="logo" src="assets/logo.png" alt="Directorate of Food & Civil Supplies">    
        </div>
    </div>
    <div id="user" class="pure-g">
        <div class="pure-u-2-5"></div>
        <div class="pure-u-1-5">
            <img id="usericon" src="assets/usericon.png" alt="User Icon">
        </div>
        <div class="pure-u-2-5"></div>
    </div>
    <div class="pure-g">
        <div class="pure-u-1-3"></div>
        <div class="pure-u-1-3">
            <form class="pure-form pure-form-aligned">
                <fieldset>
                    <div class="pure-control-group">
                        <label for="aligned-name">Username</label>
                        <input style="border-radius: 1em;" type="text" id="aligned-name" placeholder="Username" />
                    </div>
                    <div class="pure-control-group">
                        <label for="aligned-password">Password</label>
                        <input style="border-radius: 1em;" type="password" id="aligned-password" placeholder="Password" />
                    </div>
                    <div class="pure-controls">
                        <a href="../order/" style="border-radius: 1em;" type="submit" class="pure-button pure-button-primary">Sign In</a>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="pure-u-1-3"></div>
    </div>
</body>
</html>