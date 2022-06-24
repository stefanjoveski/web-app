<?php

$dsn='mysql:host=localhost;dbname=webapp';
$username='root';
$password='********';

try{
    $db= new PDO($dsn,$username,$password);
    } catch (PDOException $e){
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

?>
