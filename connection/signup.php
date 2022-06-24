<?php 
session_start();

	include("connection.php");
	include("functions.php");
	include ("encryption.php");
	include("../view/header.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		//$crypt=new Crypt(); // ovaa vrezija na php gi nemase ovie funkcii i ne rabotea nitu so instalacija
		//$password=$crypt->encrypt($password);

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
           	$password=sha1($user_name . $password);
			$user_id = random_num(5);
            $query = "INSERT INTO `user_requests`(`user_id`, `username`, `password`) VALUES ('$user_id','$user_name','$password')";
			

			mysqli_query($con, $query);
            
			header("Location: login.php");
			die;
		}else
		{
			echo '<script>alert("Please enter some valid information!")</script>';
		}
        
	}
 

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Signup</title>
		<link rel="stylesheet" href="../style.css">
	</head>
	<body>	
		
		<div id="box">
			
			<form style="align-items:center;margin-left:4.5%;" method="post">
				<div style="font-size: 20px;margin: 10px;color: black;">Signup</div>

				<input id="text" type="text" name="user_name" placeholder="username"><br><br>
				<input id="text" type="password" name="password" placeholder="password"><br><br>

				<input class="button1" style="margin-left:40%; font-size:110%" type="submit" value="Continue"><br><br>

				<a href="login.php" style="color:#f32500">Already have a profile? Log in!</a><br><br>
			</form>
		</div>

	</body>
</html>