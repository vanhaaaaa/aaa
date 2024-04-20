
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="<?=$CONTENT_URL?>/css/tc.css">

</head>

<body>
    <!-- <div class="giohang">
        <a href="cart.html"><img src="images/cart.png"><span id="countsp">0</span></a>
    </div> -->
    <div class="boxcenter">
        <div class="row mb header">
            <h1> quan tri website</h1>

        </div>
        <div class="row mb menu">
            <?php require "menu.php"?>
        </div>
        <div class="row">
            <?php include $VIEW_NAME;?>
        </div>
      
        <div class="row mb footer">
            Copyright © 2021
        </div>
    </div>

</body>

</html>