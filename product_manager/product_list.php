<?php include '../view/header.php'; ?>
<head> 
    <link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body>
    <div id="main">

        <h1 class='head'>Select a category and discover the best deals!</h1>

        <div id="sidebar">
            <ul class="vertical-menu">
                <?php foreach ($categories as $category) : ?>
                    <li>
                        <a href="?category_id=<?php 
                                echo $category['category_id']; ?>">
                            <?php echo $category['category']; ?>
                        </a>
                    </li>                
                <?php endforeach; ?>
            </ul>
        </div>

        <div id="content">
            <p class="categ" style="margin-bottom:2%"><?php echo $category_name; ?></p>
            <div style="content-align:center;padding-left:6%">
                <?php foreach ($products as $product) : ?>
                    <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);max-width: 300px;margin: auto;text-align: center;font-family: arial;float:left;margin-left:5%;padding:5%;">
                        <h1 style="background: #fdb200;color:white"><?php echo $product['name']; ?> </h1>
                        <h3><?php echo $product['product']; ?></h3>
                        <p style="color: red;font-size: 18px;text-decoration: line-through;"><?php echo $product['price']; ?></p>
                        <p style="color: grey;font-size: 22px;"><?php echo $product['discounted_price']; ?></p>
                        <p style="float:left;  padding:1%;  font-size: 13px;">Valid from: <br> <?php echo $product['date_from'];?></p>
                        <p style="float:right;  padding:1%;  font-size: 13px;">Valid to: <br> <?php echo $product['date_end'];?></p>
                    
                        <form action="." method="post">
                                <input type="hidden" name="action"
                                    value="add_to_cart" />
                                <input type="hidden" name="product_id"
                                    value="<?php echo $product['discountID']; ?>" />
                                <input type="hidden" name="name"
                                    value="<?php echo $product['name']; ?>" />
                                <input type="hidden" name="product"
                                    value="<?php echo $product['product']; ?>" />
                                <input type="hidden" name="discounted_price"
                                    value="<?php echo $product['discounted_price']; ?>" />
                                <label>Quantity:</label>
                                <select name="itemqty">
                                    <?php for($i = 1; $i <= 10; $i++) : ?>
                                        <option value="<?php echo $i; ?>">
                                            <?php echo $i; ?>
                                        </option>
                                    <?php endfor; ?>
                                </select>
                                <input class="but" type="submit" value="Add to cart" />
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
 </body>



