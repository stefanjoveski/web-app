<?php 
    include("./connection/secure_connection.php");
	secure();
?>
<header> 
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="java.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</header>
<body>
        <div id="page">
            
            <div class="logo" style="overflow:hidden;height:2.4cm;">
        
                <img src="./assets/logo.png" width="100" height="100">     
            </div>

            <ul class="menu" style="overflow:hidden">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="./model/index.php?category_id=1">Categories</a></li>
                <li><a href="./blog/index.php">Saving tips</a></li>
                <li><a href="./connection/login.php">My Profile</a></li>
            </ul>
            
        </div>
      


        <div class="slideshow-container">

            <div class="mySlides fade" style="display:block">
                <div class="numbertext">1 / 3</div>
                <img src="./assets/nike.jpg" style="width:100%;height:80%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="./assets/gucci.jpg" style="width:100%;height:80%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="./assets/Zara.png"  style="width:100%;height:80%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

        <div style="background-color:#fdb200; color:white; position:relative; overflow:hidden">
            <h1 style="text-align: center;"> Stay current with SM Discount Codes</h1>
            <div class="row">
                <div class="column">
                    <p>Pinching pennies and savvy shopping is the name of the game, and it's our job to give you all the tools
                    you'll need to win — i.e. save big! We have our own long list of SM exclusive discount codes,
                    we're on top of seasonal Sales events (ever heard of Black Friday or Amazon Prime Day?), and we even
                    have the lowdown on flash promotions. What else could you want?<br><br>
                    Our elite team of fellow deal-lovers regularly prowls 1000s of your fave online shops, and reports back 
                    with the best of the best for </p>
                </div>
                <div class="column" >
                    <p>serious savings. From high street moguls to bargain basements, our team scopes out extra savings at shops
                    such as New Look, Hotels.com, Joules, TUI, Debenhams ... and still so many more!<br><br>
                    Saving money online has never been easier than with our SM Discounts team on the hunt,
                    and you're bound to find an absolute steal with every visit. What are you waiting for? Find your perfect deal,
                    redeem your online offer, and start saving!</p>
                </div>
            </div>
        </div>
            <footer>
                <div class="container">
                    
                    <p class="text-center">Copyright @2022 | Designed by <a href="#">SM</a></p>

                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                                    
                </div>

            </footer>

</body>