<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Stefanj1002";
$dbname = "webapp";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}
?>