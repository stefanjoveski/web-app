<!DOCTYPE html>
<html>
    <?php
        include("../connection/secure_connection.php");
        secure(); 
    ?>
    <head>
        <title>SM discount codes</title>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>

    <body>
        <div id="page">
        
            <div class="logo" style="overflow:hidden;height:2.4cm;">
                <form action="." method="post">
                    <input type="hidden" name="action" value="add_to_cart" />
                    <button type="submit" style="float:right;margin-top:2%;background-color: Transparent;border:none"><img style="float:right;height:40px;width:40px;padding-right:20px;" src="../assets/cart.png"></button>
                </form>
                <img src="../assets/logo.png" width="100" height="100">  
            </div>

            <ul class="menu" style="overflow:hidden">
                <li><a class="active" href="../index.php">Home</a></li>
                <li><a href="../model/index.php?category_id=1">Categories</a></li>
                <li><a href="../blog/index.php">Saving tips</a></li>
                <li><a href="../connection/login.php">My Profile</a></li>
            </ul>
            
        </div>
    </body>

</html>

