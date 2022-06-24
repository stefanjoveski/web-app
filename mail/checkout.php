<?php 


    include ('../view/header.php'); 
    $first_name='';
    $last_name='';
    $phone='';
    $email=''; 
    $address='';
    include('../connection/connection.php');
    global $con;
    $order=$_GET['order'];
    $order_id=random_int(1,9999);
    if(!empty($order_id) && !empty($order)){   
        $query = "INSERT INTO orders(order_id,description) VALUES  ('$order_id','$order')";
        mysqli_query($con, $query);
     
       
    }
    else{
        echo "greska";
    }

?>
<main>
    <form action="." method="post" >
        <fieldset>
            <legend>User Information</legend>
                <?php if (isset($error)) : ?>
                    <p class='error'><?php echo htmlspecialchars($error); ?></p>
                <?php endif; ?>

            <label>First Name:</label>
                <input type="text" name="first_name" value="<?php echo htmlspecialchars($first_name);?>"><br>

            <label>Last Name:</label>
                <input type="text" name="last_name" value="<?php echo htmlspecialchars($last_name);?>"><br>

            <label>Phone:</label>
                <input type="text" name="phone" value="<?php echo htmlspecialchars($phone);?>"><br>

            <label>E-Mail:</label>
                <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>"><br>
            
            <label>Address</Address>:</label>
                <input type="text" name="address" value="<?php echo htmlspecialchars($address);?>"><br>
        </fieldset>
        <fieldset>
            <legend>Submit Registration</legend>
            <label>&nbsp;</label>
            <input type="submit" name="action" value="Continue"/>
            <input type="submit" name="action" value="Reset" /><br>
        </fieldset>
    </form>
</main>
