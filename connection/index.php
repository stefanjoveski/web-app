<?php 
session_start();

	include("connection.php");
	include("functions.php");
    include("../model/database.php");
	$user_data = check_login($con);


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
        $discountID = $_POST['product_id'];
        global $db;
        $query = "DELETE FROM `popusti` WHERE `discountID`='$discountID'";
        $db->exec($query); 
	      
            
    }
	$query = "SELECT * FROM popusti WHERE `user_id`='$user_data[user_id]'";
	$products= $con->query($query);
    
	
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css" />
        <title>My website</title>
    </head>

    <body>

        <table id="cart">
            <?php $count=0;?>
            <tr id="cart_header">
                        <th class="right">Item</th>
                        <th class="right">Original Price</th>
                        <th class="right">Discounted Price</th>
                        <th class="right">Published</th>
                        <th class="right">Valid</th>
                        <th class="right">Action</th>
            </tr>
            <h1 style="background-color:#f32500; color:white; margin:0px;padding:4px">
            Company <?php echo $user_data['username'];$ime=$user_data['username']; ?> <a class="button1" style="text-decoration:none;float:right;font-size:20px; margin:5px; color:rgb(10, 121, 110);" href="../connection/logout.php">Log out</a> </h1>
            
            <?php foreach ($products as $product) : ?>
                <?php if($count==0){$ime=$product['name'];$count=1;} ?>
                <tr class="red">
                    <td class="right"><?php echo 
                        $product['product']; ?></td>
                    <td class="right" ><?php echo 
                        $product['price']; ?></td>
                    <td class="right" ><?php echo 
                        $product['discounted_price'];?></td>
                    <td class="right"> <?php echo 
                        $product['date_from']; ?></td>
                    <td class="right"> <?php echo 
                        $product['date_end']; ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="product_id" value="<?php echo
                                    $product['discountID']; ?>" />				
                            <input class="button" type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
            
    </body>
</html>