<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

		
			$query = "SELECT * FROM `users` WHERE `username`='$user_name'";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === sha1($user_name . $password))
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../product_manager/product_add.php");
						die;
					}
				}
			}
			
			echo'<script>alert("1.wrong username or password!")</script>';
		}else
		{
			echo '<script>alert("2.wrong username or password!")</script>';
		}
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<?php include '../view/header.php'; ?>
		<link rel="stylesheet" href="../style.css">
		<title>Login</title>
	</head>
	<body>
		<div id="box">
			
			<form style="align-items:center;margin-left:4.5%;" method="post">
				<div style="font-size: 20px;margin: 10px;color: black;">Login</div>

				<input id="text" type="text" name="user_name" placeholder="username"><br><br>
				<input id="text" type="password" name="password" placeholder="password"><br><br>

				<input class="button1" style="margin-left:40%; font-size:110%" type="submit" value="Continue"><br><br>

				<a href="signup.php" style="color:#f32500">Still don't have a profile? Sign up for free!</a><br><br>
			</form>
			
		</div>
		<div style="float: right; padding-bottom: 10px; padding-top: 10px; text-align: center; bottom: 0px;width: 100%;">
		<a href="admin.php" style="color:#f32500;">Sign in as an administrator!</a><br><br>
		</div>
	</body>
</html>