<?php include("../connection/index.php"); 
    $query = "SELECT * FROM categories";
    $categories= $db->query($query);
    $query = "SELECT `user_id` FROM `users`";
    $user_id= $db->query($query);
?>
<div id="main">

    <h1>Add Product</h1>
    <form action="../model/index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product" />

        <label>Category:</label> 
        <select name="category_id">
            <?php foreach ( $categories as $category ) : ?>
                <option value="<?php echo $category['category_id']; ?>">
                    <?php echo $category['category']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br/>

        <label>productID:</label>
        <input type="input" name="discountID" /><br />
        <input type="hidden" name="user_id" value="<?php echo $user_data['user_id'] ?>" />
        <input type="hidden" name="name" value="<?php echo $ime; ?>" />

        <label>product:</label>
        <input type="input" name="product" />
        <br/>

        <label>List Price:</label>
        <input type="input" name="price" />
        <br />

        <label>Discounted price:</label>
        <input type="input" name="discounted_price" />
        <br />

        <label>date_from:</label>
        <input type="input" name="date_from" />
        <br />

        <label>date_to:</label>
        <input type="input" name="date_end" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br/>
    </form>    

</div>

