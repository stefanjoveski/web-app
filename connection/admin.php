<?php 
	include("secure_connection.php");
	secure();
	session_start();
	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){			

			if($user_name="root" && $password="admin123"){
				
						$_SESSION['user_id'] =9999;
						header("Location: adminindex.php");
						die;
					
			}
        }else{
			echo '<script>alert("wrong username or password!")</script>';
		}
	}

?>
<!DOCTYPE html>
<html>

	<head>
		<title>Login</title>
	</head>

	<body>

		<link rel="stylesheet" href="../style.css">
		<div id="box">
			<form style="align-items:center;margin-left:4.5%;" method="post">
				<div style="font-size: 20px;margin: 10px;color: black;">Login</div>

				<input id="text" type="text" name="user_name" placeholder="username"><br><br>
				<input id="text" type="password" name="password" placeholder="password"><br><br>

				<input class="button1" style="margin-left:40%; font-size:110%" type="submit" value="Continue"><br><br>
			</form>
		</div>

	</body>
	
</html>