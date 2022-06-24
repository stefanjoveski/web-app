<?php
    include "../connection/connection.php";
    include "../view/header.php";

    global $con;
    $msg="";

    if(isset($_POST['upload'])){
        $target= "images/".basename($_FILES['image']['name']);
        $image= $_FILES['image']['name'];
        $text=$_POST['text'];
        $title=$_POST['title'];
        $id=random_int(0,200);

        $sql= "INSERT INTO images(id,title,image,text) VALUES ('$id','$title','$image', '$text')";
        mysqli_query($con,$sql);

        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            $msg= "Uspeshno prikachena slika";
        }
        else{
            $msg="Problem pri prikachuvanjeto na slikata";
        }
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css" />
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="content">
            <?php
                include 'post.php';
                $sql ="SELECT * FROM images";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_array($result)){

                    $nov=new Post($row['title'],$row['text'],$row['image']);
                    $nov->pechati(); 

                }
            ?>
            <h1 style="background:black;color:white;margin:0%;height:1.5cm;padding-top:0.3cm;padding-left:40%">Share your experience! </h1>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">

                <p style="font-weight:bolder;font-size:150%;">Title </p>
                <div>
                    <input class="blog" type="text"  name="title" placeholder="Title"></textarea>
                </div>

                <p style="font-weight:bolder;font-size:150%;">Content </p>
                <div>
                    <textarea class="blog" name="text" cols="40" rows="7" placeholder="Content"></textarea>
                </div> 
                
                <p style="font-weight:bolder;font-size:150%;"> Your image</p>
                <div>
                    <input class="button1" type= "file" name="image"> 
                </div> 

                <div>
                    <input class="button1" style="font-size:150%;float:right" type="submit" name="upload" value="Post">
                </div> 
                
            </form>
        </div>
    </body>
</html>