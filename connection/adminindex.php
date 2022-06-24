<?php
session_start();

	include("connection.php");
	include("functions.php");
    include("../model/database.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        $user_id = $_POST['user_id'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            
            global $db;
            $query = "INSERT INTO users(user_id,username,password) VALUES ('$user_id','$user_name','$password')";
            $db->exec($query);
            $query = "DELETE FROM `user_requests` WHERE `username`='$user_name'";
            $db->exec($query);      
            
        }
	} 
?>     
      
    
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>

    <body>

        <div id="content">
            <?php  
                $query = "SELECT * FROM user_requests";
                $user_requests = $con->query($query);                    
            ?>
            <h1 style="background-color:#fdb200; color:white; overflow:hidden; margin:0px;padding:5px">User Requests<a class="button1" style="text-decoration:none;float:right;font-size:20px; margin:5px; color:red;" href="../connection/logout.php">Log out</a>  </h1>  
        
            <table id="cart" style="position: relative;overflow: hidden;  margin: 0%; width:100%; ">
            
                <?php foreach ($user_requests as $user) : ?>
                    <tr >
                        <td><?php echo $user['username']; ?></td>
                        <td> 
                            <form method="post">
                                <input type="hidden" name="user_id"
                                    value="<?php echo
                                        $user['user_id']; ?>" />
                                <input type="hidden" name="user_name"
                                    value="<?php echo
                                        $user['username']; ?>" />
                                <input type="hidden" name="password"
                                    value="<?php echo
                                        $user['password']; ?>" />
                                <input class="button button1" type="submit" value="Confirm user" />
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>        
  
        </div>
    </body>
    
</html>